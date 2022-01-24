<?php

namespace generatingObjects;

include_once('Employee.php');

class CluedUp extends Employee
{
    public function fire(): void
    {
        print "{$this->name}: I'll call my lawyer\n";
    }
}