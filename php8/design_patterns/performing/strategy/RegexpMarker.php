<?php

namespace performing\strategy;

class RegexpMarker extends Marker
{
    public function mark(string $response): bool 
    {
        return (preg_match("$this->test", $response) === 1); 
    }
}