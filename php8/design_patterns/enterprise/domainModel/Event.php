<?php

namespace enterprise\domainModel;

class Event extends DomainObject
{
    private Space $space;

    public function __construct(int $id, private string $name)
    {
        $this->name = $name;
        parent::__construct($id);
        $this->spaces = self::getCollection(Event::class);
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

    public function setSpace(Space $space): void
    {
        $this->space = $space;
    }

    public function getSpace(): Space
    {
        return $this->space;
    }
}