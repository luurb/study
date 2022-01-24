<?php

namespace generatingObjects\abstractFactory;

class BloggsApptEncoder extends Encoder
{
    public function encode(): string
    {
        return "Appointment data encoded in BloggsCal format \n";
    }
}