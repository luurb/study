<?php

namespace performing\observer;

interface Observer
{
    public function update(Observable $observable): void;
}