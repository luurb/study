<?php

namespace performing\observer;

class GeneralLogger extends LoginObserver
{
    public function doUpdate(Login $login): void
    {
        print __CLASS__ . ": add login data to log\n";
    }
}