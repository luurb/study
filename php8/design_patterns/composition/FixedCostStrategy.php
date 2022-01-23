<?php

namespace composition;

include_once('CostStrategy.php');
include_once('Lesson.php');

class FixedCostStrategy extends CostStrategy
{
    public function cost(Lesson $lesson): int
    {
        return 30;
    }

    public function chargeType(): string
    {
        return "fixed rate";
    }
}