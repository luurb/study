<?php

namespace enterprise\appController;

class ComponentDescriptor
{
    private array $views = [];
    public function __construct(private string $path, private string $cmdstr)
    {
        
    }

    public function getCommand(): Command
    {
        $class = $this->cmdstr;
        if (is_null($class)) {
            throw new \Exception("unknown class '$class'");
        }

        if (! class_exists($class)) {
            throw new \Exception("class '$class' not found");
        }

        $refclass = new \ReflectionClass($class);

        if (! $refclass->isSubclassOf(Command::class)) {
            throw new \Exception("command '$class' is not a Command");
        }

        return $refclass->newInstance();
    }

    public function setview(int $status, ViewComponent $view): void
    {
        $this->views[$status] = $view;
    }

    public function getView(Request $request): ViewComponent
    {
        $status = $request->getCmdStatus();
        $status = (is_null($status)) ? 0 : $status;

        if (isset($this->views[$status])) {
            return $this->views[$status];
        }

        if (isset($this->views[0])) {
            return $this->views[0];
        }

        throw new \Exception("no view found");
    }
}