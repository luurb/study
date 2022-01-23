<?php

namespace inheritance;

abstract class Lesson 
{
    public const FIXED = 1;
    public const TIMED = 2;

    public function __construct(protected int $duration, private int
    $costType = 1)
    {
        
    }

    public function cost(): int
    {
        switch ($this->costType) {
            case self::TIMED:
                return (5*$this->duration);
                break;
            case self::FIXED:
                return 30;
                break;
            default:
                $this->costType = self::FIXED;
                return 30;
        }
    }

    public function chargeType(): string
    {
        switch ($this->costType) {
            case self::TIMED:
                return "hourly rate";
                break;
            case self::FIXED:
                return "fixed rate";
                break;
            default:
                $this->costType = self::FIXED;
                return "fixed rate";
        }
    }
}