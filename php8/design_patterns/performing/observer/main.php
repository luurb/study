<?php

use performing\observer\GeneralLogger;
use performing\observer\Login;
use performing\observer\PartnershipTool;
use performing\observer\SecurityMonitor;

include_once('../../autoload.php');

$login = new Login();
new SecurityMonitor($login);
new GeneralLogger($login);
new PartnershipTool($login);