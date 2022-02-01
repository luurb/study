<?php

namespace enterprise\transactionScript;

abstract class Base
{
    private \PDO $pdo;
    private string $config = __DIR__ . "/data/options.ini";

    public function __construct()
    {
        $reg = REgistry::instance();
        $options = parse_ini_file($this->config, true);
        $conf = new COnf($options['config']);
        $reg->setConf($conf);
        $dsn = $reg->getDSN();

        if (is_null($dsn)) {
            throw new \Exception("No DSN");
        }

        $this->pdo = new \PDO($dsn);
        $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    public function getPdo(): \PDO
    {
        return $this->pdo;
    }
}