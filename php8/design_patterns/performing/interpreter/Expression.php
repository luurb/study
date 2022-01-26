<?php

namespace performing\interpreter;

abstract class Expression
{
    private static int $keycount = 0;
    private string $key;
    abstract public function interpret(interpreterContext $context);

    public function getKey(): string
    {
        if (! isset($this->key)) {
            self::$keycount++;
            $this->key = (string)self::$keycount;
        }
        return $this->key;
    }
}