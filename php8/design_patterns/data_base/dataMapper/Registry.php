<?php

namespace data_base\dataMapper;

class Registry 
{
    private static ?Registry $instance = null;
    private ?Conf $conf = null;
    private \PDO $pdo;

    public function __construct()
    {
        $dsn = $this->getDSN();

        if (is_null($dsn)) {
            throw new \Exception("No DSN");
        }

        $this->pdo = new \PDO('mysql:host=localhost;dbname=woo_db;', 'woo', 'Woo12345!');
        $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    public function getPdo(): \PDO
    {
        return $this->pdo;
    }

    public function getVenueMapper(): VenueMapper
    {
        return new VenueMapper();
    }
    
    public function getSpaceMapper(): SpaceMapper
    {
        return new SpaceMapper();
    }

    public function getVenueCollection(): VenueCollection
    {
        return new VenueCollection();
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
        $dsn = "'mysql:host=localhost;dbname=woo_db;', 'woo', 'Woo12345!'";
        return $dsn;
    }
}