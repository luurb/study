<?php

namespace flexibleProgramming\composite;

abstract class Unit
{
    public function getComposite(): ?CompositeUnit 
    {
        return null;
    }

    abstract public function bombardStrength(): int;
}