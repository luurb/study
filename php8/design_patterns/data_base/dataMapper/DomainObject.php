<?php

namespace data_base\dataMapper;

abstract class DomainObject
{
    public function __construct(private int $id)
    {
        
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getId(): int
    {
        return $this->id;
    }

    /*public static function getCollection(string $type): Collection
    {
        return Collection::getCollection($type);
    }*/

    public function markDirty(): void
    {
        
    }

    abstract public function getName(): string;
}