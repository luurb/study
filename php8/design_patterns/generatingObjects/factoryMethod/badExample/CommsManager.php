<?php

namespace generatingObjects\factoryMethod\badExample;

use generatingObjects\factoryMethod\badExample\ApptEncoder;
use generatingObjects\factoryMethod\badExample\BloggsApptEncoder;
use generatingObjects\factoryMethod\badExample\MegaApptEncoder;

class CommsManager 
{
    public const BLOGS = 1;
    public const MEGA = 2;
    public function __construct(private int $mode)
    {
        
    }
    
    public function getApptEncoder(): ApptEncoder
    {   
        switch ($this->mode) {
            case (self::MEGA):
                return new MegaApptEncoder();
            default:
                return new BloggsApptEncoder();
        }
    }

    public function getHeaderText(): string
    {
        switch ($this->mode) {
            case (self::MEGA):
                return "MegaCal header \n";
            default: 
                return "BloggCal header \n";
        }
    }
}