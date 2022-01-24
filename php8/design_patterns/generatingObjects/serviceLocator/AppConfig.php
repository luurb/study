<?php

namespace generatingObjects\serviceLocator;

use generatingObjects\factoryMethod\goodExample\BloggsCommsManager;
use generatingObjects\factoryMethod\goodExample\CommsManager;
use generatingObjects\factoryMethod\goodExample\MegaCommsManager;

include_once('../../autoload.php');

class AppConfig
{
    private static ?AppConfig $instance = null;
    private CommsManager $commsManager;
    private function __construct()
    {
        $this->init();
    }

    private function init(): void
    {
        switch (Settings::$COMMSTYPE) {
            case 'MEGA':
                $this->commsManager = new MegaCommsManager();
            default:
                $this->commsManager = new BloggsCommsManager();
        }
    }

    public static function getInstance(): AppConfig
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getCommsManager(): CommsManager
    {
        return $this->commsManager;
    }
}