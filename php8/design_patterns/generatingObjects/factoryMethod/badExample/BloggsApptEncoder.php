<?php

namespace generatingObjects\factoryMethod\badExample;

use generatingObjects\factoryMethod\badExample\ApptEncoder;

class BloggsApptEncoder extends ApptEncoder
{
    public function encode(): string
    {
        return "Appointment data encoded in BloggsCal format \n";
    }
}