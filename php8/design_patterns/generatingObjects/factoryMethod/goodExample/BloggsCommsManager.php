<?php

namespace generatingObjects\factoryMethod\goodExample;

use generatingObjects\factoryMethod\badExample\ApptEncoder;
use generatingObjects\factoryMethod\badExample\BloggsApptEncoder;

class BloggsCommsManager extends CommsManager
{
    public function getHeaderText(): string
    {
        return "BloggsCal header \n";
    }

    public function getApptEncoder(): ApptEncoder
    {
        return new BloggsApptEncoder;
    }

    public function getFooterText(): string
    {
        return "BloggsCal footer \n";
    }
}