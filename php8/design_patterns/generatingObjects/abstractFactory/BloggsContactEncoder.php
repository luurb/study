<?php

namespace generatingObjects\abstractFactory;

class BloggsContactEncoder extends Encoder
{
    public function encode(): string
    {
        return "Appointment data encoded in ContactCal format \n";
    }
}