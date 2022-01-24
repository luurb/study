<?php

namespace generatingObjects;

include_once('Employee.php');

use generatingObjects\Employee;

class Minion extends Employee
{
    public function fire(): void
    {
        print "{$this->name}: I'll clear my desk\n";
    }
}


