<?php

namespace Bicycle;

class MountainBicycle extends Bicycle
{

    public function getDescription(): string
    {
        return "This ths Mountain Bike";
    }

    public function getPrice(): float
    {
        return 699.99;
    }
}