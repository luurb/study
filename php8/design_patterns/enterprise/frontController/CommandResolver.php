<?php

namespace enterprise\frontController;

class CommandResolver
{
    private static ?\ReflectionClass $refcmd = null;
    private static string $defaultcmd = DefaultCommand::class;

    public function __construct()
    {
        self::$refcmd = new \ReflectionClass(Command::class);
    }

    public function getCommand(Request $request): Command
    {
        $reg = Registry::instance();
        $commands = $reg->getCommands();
        $path = $request->getPath();
        $class = $commands->get($path);
        if (is_null($class)) {
            $request->addFeedback("path '$path' not matched");
            return new self::$defaultcmd;
        }

        if (! class_exists($class)) {
            $request->addFeedback("class '$class' not found");
            return new self::$defaultcmd;
        }

        $refclass = new \ReflectionClass($class);

        if (! $refclass->isSubclassOf(self::$refcmd)) {
            $request->addFeedback("command '$refclass' is not Command");
            return new self::$defaultcmd;
        }

        return $refclass->newInstance();
    }

    public function execute(Request $request)
    {

    }
}