<?php

namespace data_base\dataMapper;

class Venue extends DomainObject
{
    private SpaceCollection $spaces;

    public function __construct(int $id, private string $name)
    {
        $this->name = $name;
        parent::__construct($id);
        //$this->spaces = self::getCollection(Space::class);
    }

    public function setSpaces(SpaceCollection $spaces): void
    {
        $this->spaces = $spaces;
    }

    public function getSpaces(): SpaceCollection
    {
        return $this->spaces;
    }

    public function addSpace(Space $space): void
    {
        $this->spaces->add($space);
        $space->setVenue($this);
    }

    public function setName(string $name): void
    {
        $this->name = $name;
        $this->markDirty();
    }

    public function getName(): string
    {
        return $this->name;
    }
}