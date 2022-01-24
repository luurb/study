<?php

use flexibleProgramming\composite\Archer;
use flexibleProgramming\composite\Army;
use flexibleProgramming\composite\LaserCannonUnit;
use flexibleProgramming\composite\UnitScript;

include_once('../../autoload.php');

$mainArmy = new Army();

$mainArmy->addUnit(new Archer());
$mainArmy->addUnit(new LaserCannonUnit());

$subArmy = new Army();

$subArmy->addUnit(new Archer());
$subArmy->addUnit(new Archer());
$subArmy->addUnit(new Archer());

$newArmy = UnitScript::joinExisting($mainArmy, $subArmy);

print "Attacking with strengh: {$newArmy->bombardStrength()}\n";

