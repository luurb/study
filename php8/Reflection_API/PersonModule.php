<?php

include_once('IModule.php');

class PersonModule implements IModule 
{
    public function setPerson(Person $person): void
    {
        print "PersonModule::setPerson(): {$person->name}\n";
    }

    public function execute(): void
    {
        
    }
}