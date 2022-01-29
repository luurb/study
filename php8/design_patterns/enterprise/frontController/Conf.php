<?php

namespace enterprise\frontController;

class Conf
{
 
    public function __construct(private array $arr = [])
    {
    }

    public function get(string $key): string
    {
      return $this->arr[$key];
    }
}