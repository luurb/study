<?php

namespace enterprise\appController;

class TemplateViewComponent implements ViewComponent
{
    public function __construct(private string $name)
    {
        
    }

    public function render(Request $request): void
    {
        $reg = Registry::instance();
        $conf = $reg->getConf();
        $path = $conf->get("templatepath");

        if (is_null($path)) {
            throw new \Exception("no template directory");
        }
        $fullpath = "{$path}/{$this->name}.php";

        if (! file_exists($fullpath)) {
            throw new \Exception("no template at {$fullpath}");
        }
        include($fullpath);
    }
}