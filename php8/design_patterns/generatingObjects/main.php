<?php

use generatingObjects\{Minion, NastyBoss, CluedUp, WellConnected};

include_once('../autoload.php');


$boss = new NastyBoss();
$boss->addEmployee(new Minion("harry"));
$boss->addEmployee(new CluedUp("bob"));
$boss->addEmployee(new Minion("mary"));
$boss->projectFails();
$boss->projectFails();
$boss->projectFails();

