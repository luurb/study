<?php

include_once('../../../autoload.php');

use generatingObjects\factoryMethod\badExample\CommsManager;


$man = new CommsManager(CommsManager::MEGA);
print (get_class($man->getApptEncoder())) . "\n";

$man = new CommsManager(CommsManager::BLOGS);
print (get_class($man->getApptEncoder())) . "\n";