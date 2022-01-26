<?php

namespace performing\interpreter;

class LiteralExpression extends Expression
{

    public function __construct(private mixed $value)
    {
        
    }

    public function interpret(InterpreterContext $context): void
    {
        $context->replace($this, $this->value);
    }
}