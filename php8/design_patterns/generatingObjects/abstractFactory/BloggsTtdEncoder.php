<?php

namespace generatingObjects\abstractFactory;

class BloggsTtdEncoder extends Encoder
{
    public function encode(): string
    {
        return "Appointment data encoded in TtdEncoderCal format \n";
    }
}