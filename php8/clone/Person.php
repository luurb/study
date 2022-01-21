<?php

include_once('Account.php');

class Person 
{
    private int $id = 0;

    public function __construct(private string $name, private int $age, public Account $account) {}

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function __clone(): void
    {
        $this->id = 0;
        
        //now clone has his own account
        $this->account = clone $this->account;
    }
}

$person = new Person("Bob", 44, new Account(200));
$person->setId(55);
$person2 = clone $person;
print $person->getId() . "\n";
print $person2->getId() . "\n";
$person->account->balance += 10;
//refenerce to Account
print $person2->account->balance;