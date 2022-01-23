<?php

include_once('Lecture.php');
include_once('Seminar.php');
include_once('Lesson.php');

use inheritance\Lesson;

$lecture = new inheritance\Lecture(5, Lesson::FIXED);
print "{$lecture->cost()} ({$lecture->chargeType()})\n";

$seminar = new inheritance\Seminar(3, Lesson::TIMED);
print "{$seminar->cost()} ({$seminar->chargeType()})\n";