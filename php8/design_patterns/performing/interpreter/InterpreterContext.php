<?php

namespace performing\interpreter;

class InterpreterContext
{
    private array $expressionStore = [];

    public function replace(Expression $exp, mixed $value): void
    {
        $this->expressionStore[$exp->getKey()] = $value;
    }

    public function lookUp(Expression $exp): mixed
    {
        return $this->expressionStore[$exp->getKey()];
    }
}