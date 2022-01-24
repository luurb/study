<?php

namespace generatingObjects\factoryMethod\goodExample;

use generatingObjects\factoryMethod\badExample\ApptEncoder;
use generatingObjects\factoryMethod\badExample\MegaApptEncoder;

class MegaCommsManager extends CommsManager
{
    public function getHeaderText(): string
    {
        return "MegaCal header \n";
    }

    public function getApptEncoder(): ApptEncoder
    {
        return new MegaApptEncoder;
    }

    public function getFooterText(): string
    {
        return "MegaCal footer \n";
    }
}