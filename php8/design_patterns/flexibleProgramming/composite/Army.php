<?php

namespace flexibleProgramming\composite;

class Army extends CompositeUnit
{
    public function bombardStrength(): int
    {
        $ret = 0;
        foreach ($this->getUnits() as $unit) {
            $ret += $unit->bombardStrength();
        }
        return $ret;
    }
}