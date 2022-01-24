<?php

namespace generatingObjects;

abstract class Employee
{
    public function __construct(protected string $name)
    {
        
    }

    abstract public function fire(): void;
}