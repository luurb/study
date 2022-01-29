<?php

namespace enterprise\frontController;

class ApplicationHelper
{
    private string $config = __DIR__ . "/options/woo_options.ini";
    private Registry $reg;

    public function __construct()
    {
        $this->reg = Registry::instance();
    }

    public function init(): void
    {
        $this->setupOptions();
        if (defined('STDIN')) {
            $request = new CliRequest();
        } else {
            $request = new HttpRequest();
        }
        $this->reg->setRequest($request);
    }

    public function setupOptions(): void
    {
        if (! file_exists($this->config)) {
            throw new \Exception("Could not find options file");
        }
        $options = parse_ini_file($this->config, true);
        $this->reg->setConf(new Conf($options['config']));
        $this->reg->setCommands(new Conf($options['commands']));
    }
}