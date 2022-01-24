<?php

namespace flexibleProgramming\decorator;

class Plains extends Tile
{
    private int $welathFactor = 2;

    public function getWealthFactor(): int
    {
        return $this->welathFactor;
    }
}