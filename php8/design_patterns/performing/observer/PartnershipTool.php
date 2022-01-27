<?php

namespace performing\observer;

class PartnershipTool extends LoginObserver
{
    public function doUpdate(Login $login): void
    {
        print __CLASS__ . ": set cookie if it matches a list\n";
    }
}