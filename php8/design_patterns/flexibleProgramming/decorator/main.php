<?php

use flexibleProgramming\decorator\DiamondDecorator;
use flexibleProgramming\decorator\Plains;
use flexibleProgramming\decorator\PollutedDecorator;

include_once('../../autoload.php');

$tile = new Plains();
print "Tile wealth factor: {$tile->getWealthFactor()}\n";

$tile = new DiamondDecorator(new Plains());
print "Diamond tile wealth factor: {$tile->getWealthFactor()}\n";

$tile = new PollutedDecorator(new Plains());
print "Polluted tile wealth factor: {$tile->getWealthFactor()}\n";

$tile = new PollutedDecorator(new DiamondDecorator(new Plains()));
print "Polluted diamond tile wealth factor: {$tile->getWealthFactor()}\n";