<?php

namespace enterprise\transactionScript;

class Registry 
{
    private static ?Registry $instance = null;
    private ?Conf $conf = null;


    public function __construct()
    {
    }

    public static function instance(): self
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }


    public function setConf(Conf $conf): void
    {
        $this->conf = $conf;
    }

    public function getConf(): Conf
    {
        if (is_null($this->conf)) {
            $this->conf = new Conf();
        }

        return $this->conf;
    }

    public function getDSN(): string
    {
        return $this->conf->get('dsn');
    }
}