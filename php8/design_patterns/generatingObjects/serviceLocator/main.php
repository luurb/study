<?php

use generatingObjects\serviceLocator\AppConfig;

include_once('../../autoload.php');

$commsMgr = AppConfig::getInstance()->getCommsManager();
print $commsMgr->getApptEncoder()->encode();