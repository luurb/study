<?php

include_once('../autoload.php');

use composition\TimedCostStrategy;
use composition\FixedCostStrategy;
use composition\Seminar;
use composition\Lecture;

$lessons[] = new Seminar(4, new TimedCostStrategy());
$lessons[] = new Lecture(4, new FixedCostStrategy());

foreach ($lessons as $lesson) {
    print "lesson charge {$lesson->cost()}.";
    print "Charge type: {$lesson->chargeType()}\n";
}