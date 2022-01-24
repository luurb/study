<?php

namespace generatingObjects\factoryMethod\goodExample;

class BloggsApptEncoder extends ApptEncoder
{
    public function encode(): string
    {
        return "Appointment data encoded in BloggsCal format \n";
    }
}