<?php

namespace flexibleProgramming\decorator;

class PollutedDecorator extends TileDecorator
{
    public function getWealthFactor(): int
    {
        return $this->tile->getWealthFactor() - 4;
    }
}