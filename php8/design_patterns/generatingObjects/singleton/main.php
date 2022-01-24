<?php

include_once('Preferences.php');

use generatingObjects\singleton\Preferences;

$pref = Preferences::getInstance();
$pref->setProperty("name", "lukasz");

unset($pref);

$pref2 = Preferences::getInstance();
print $pref2->getProperty("name") . "\n";