<?php

namespace Bicycle;

class TownBicycle extends Bicycle
{

    public function getDescription(): string
    {
        return 'This is Town Bicycle';
    }

    public function getPrice(): float
    {
        return 599.99;
    }
}