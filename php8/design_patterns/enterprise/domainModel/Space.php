<?php

namespace enterprise\domainModel;

class Space extends DomainObject
{
    private EventCollection $events;
    private Venue $venue;

    public function __construct(int $id, private string $name)
    {
        $this->name = $name;
        parent::__construct($id);
        $this->spaces = self::getCollection(Event::class);
    }

    public function setEvents(EventCollection $events): void
    {
        $this->events = $events;
    }

    public function getEvents(): EventCollection
    {
        return $this->events;
    }

    public function addEvent(Event $event): void
    {
        $this->events->add($event);
        $event->setSpace($this);
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

    public function setVenue(Venue $venue): void
    {
        $this->venue = $venue;
    }

    public function getVenue(): Venue
    {
        return $this->venue;
    }
}