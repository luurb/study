<?php

namespace generatingObjects\factoryMethod\badExample;

use generatingObjects\factoryMethod\badExample\ApptEncoder;

class MegaApptEncoder extends ApptEncoder
{
    public function encode(): string
    {
        return "Appointment data encoded in MegaCal format \n";
    }
}