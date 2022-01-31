<?php

namespace enterprise\appController;


class AppController
{
    private static string $defaultcmd = DefaultCommand::class;
    private static string $defaultview = "fallback";

    public function getCommand(Request $request): Command
    {
        try {
            $descriptor = $this->getDescriptor($request);
            $cmd = $descriptor->getCommand();
        } catch (\Exception $e) {
            $request->addFeedback($e->getMessage());
            return new self::$defaultcmd;
        }

        return $cmd;
    }

    public function getView(Request $request): ViewComponent
    {
        try {
            $descriptor = $this->getDescriptor($request);
            $view = $descriptor->getView();
        } catch (\Exception $e) {
            return new TemplateViewComponent(self::$defaultview);
        }

        return $view;
    }

    private function getDescriptor(Request $request): ComponentDescriptor
    {
        $reg = Registry::instance();
        $commands = $reg->getCommands();
        $path = $request->getPath();
        $descriptor = $commands->get($path);

        if (is_null($descriptor)) {
            throw new \Exception("no descriptor for {$path}", 404);
        }

        return $descriptor;
    }
}