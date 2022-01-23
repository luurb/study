<?php

namespace composition;

include_once('Lesson.php');

abstract class CostStrategy
{
    abstract public function cost(Lesson $lesson): int;
    abstract public function chargeType(): string;
    
}