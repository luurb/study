<?php

namespace data_base\dataMapper;

class SpaceCollection extends Collection
{
    public function targetClass(): string
    {
        return Space::class;
    }
}