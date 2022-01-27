<?php

namespace performing\strategy;

class MarkLogicMarker extends Marker
{

    public function __construct(string $test)
    {
        parent::__construct($test);
    }

    public function mark(string $response): bool
    {
        return $this->engine->evaluate($response);
    }
}