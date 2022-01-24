<?php

namespace generatingObjects\abstractFactory;

abstract class Encoder 
{
    abstract public function encode(): string;
}