<?php

namespace enterprise\domainModel;

class SpaceCollection extends Collection
{
    private array $spaces = [];

    public function add(Space $space): void
    {
        $this->spaces[$space->getName()] = $space;
    }

    public function getSpace(string $name): Space
    {
        return $this->spaces[$name];
    }

}