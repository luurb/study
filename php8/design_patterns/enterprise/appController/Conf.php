<?php

namespace enterprise\appController;

class Conf
{
 
    public function __construct(private array $components = [])
    {

    }

    public function set(string $key, mixed $value): void
    {
        $this->components[$key] = $value;
    }

    public function get(string $key): string
    {
      return $this->components[$key];
    }
}