<?php

namespace generatingObjects\factoryMethod\goodExample;

use generatingObjects\factoryMethod\badExample\ApptEncoder;

abstract class CommsManager
{
    abstract public function getHeaderText(): string;
    abstract public function getApptEncoder(): ApptEncoder;
    abstract public function getFooterText(): string;
}