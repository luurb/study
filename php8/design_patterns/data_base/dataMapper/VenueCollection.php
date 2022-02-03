<?php

namespace data_base\dataMapper;

class VenueCollection extends Collection
{
    public function targetClass(): string
    {
        return Venue::class;
    }
}