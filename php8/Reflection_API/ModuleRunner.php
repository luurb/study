<?php

include_once('PersonModule.php');
include_once('FtpModule.php');
include_once('IModule.php');
include_once('Person.php');

class ModuleRunner
{
    private array $configData = [
        PersonModule::class => ['person' => 'bob'],
        FtpModule::class    => [
            'host' => 'example.com',
            'user' => 'anon'
        ]
    ];

    private array $modules = [];

    public function init(): void
    {
        $interface = new \ReflectionClass(IModule::class);
        foreach ($this->configData as $module_name => $params) {
            $module_class = new \ReflectionClass($module_name);
            if(! $module_class->isSubclassOf(($interface))) {
                throw new Exception("unknown module type: $module_name");
            }
            $module = $module_class->newInstance();
            foreach ($module_class->getMethods() as $method) {
                $this->handleMethod($module, $method, $params);
            }
            array_push($this->modules, $module);
        }
    }

    public function handleMethod(IModule $module, \ReflectionMethod $method, 
    array $params): bool 
    {
        $name = $method->getName();
        $args = $method->getParameters();

        if (count($args) != 1 || substr($name, 0, 3) != "set") {
            return false;
        }
        $property = strtolower(substr($name, 3));

        if (! isset($params[$property])) {
            return false;
        }

        if (! $args[0]->hasType()) {
            $method->invoke($module, $params[$property]);
            return true;
        }

        $arg_type = $args[0]->getType();

        if (! ($arg_type instanceof \ReflectionUnionType) && class_exists(
        $arg_type->getName())) {
            $method->invoke(
                $module,
                (new \ReflectionClass($arg_type->getName()))->newInstance(
                $params[$property])
            );
        } else {
            $method->invoke($module, $params[$property]);
        }
        return true;
    }   
}