<?php

namespace enterprise\domainModel;

class EventCollection extends Collection
{
    private array $events = [];

    public function getEvents(string $name): Event
    {
        return $this->events[$name];
    }

    public function add(Event $event): void
    {
        $this->events[$event->getName()] = $event;
    }
}