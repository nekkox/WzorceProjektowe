<?php

namespace Bicycle;

class BackLight extends BicycleDecorator
{

    public function __construct(Bicycle $bicycle)
    {
        parent::__construct($bicycle);
    }

    public function getDescription(): string
    {
        return $this->getBicycle()->getDescription() . " + lampka tylna";
    }

    public function getPrice(): float
    {
        return $this->getBicycle()->getPrice() + 22.99;
    }
}