<?php

namespace enterprise\appController;

class DefaultCommand extends Command
{
    protected function doExecute(Request $request): void
    {
        $request->addFeedback("Welcote to WOO");
        include(__DIR__ . "/index.php");
    }
}