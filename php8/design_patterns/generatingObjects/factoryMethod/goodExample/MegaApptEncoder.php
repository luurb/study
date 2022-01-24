<?php

namespace generatingObjects\factoryMethod\goodExample;

class MegaApptEncoder extends ApptEncoder 
{
    public function encode(): string
    {
        return "Appointment data encoded in MegaCal format \n";
    }
}