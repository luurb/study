<?php

namespace generatingObjects\abstractFactory;


class BloggsCommsManager extends CommsManager
{
    public function getHeaderText(): string
    {
        return "BloggsCal header\n";
    }

    public function make(int $flag): Encoder
    {
        switch ($flag) {
            case self::APPT:
                return new BloggsApptEncoder();
            case self::CONTACT:
                return new BloggsContactEncoder();
            default:
                return new BloggsTtdEncoder();
        }
    }
    public function getFooterText(): string
    {
        return "BloggsCal footer\n";
    }
}