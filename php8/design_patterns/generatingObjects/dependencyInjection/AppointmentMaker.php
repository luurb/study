<?php

namespace generatingObjects\dependencyInjection;

use generatingObjects\factoryMethod\goodExample\ApptEncoder;

class AppointmentMaker
{
    public function __construct(private ApptEncoder $encoder)
    {
        
    }

    public function makeAppointment(): string
    {
        return $this->encoder->encode();
    }
}