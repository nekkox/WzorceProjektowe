<?php

namespace Bicycle;

class FrontLight extends BicycleDecorator
{

    public function __construct(Bicycle $bicycle)
    {
        parent::__construct($bicycle);
    }

    public function getDescription(): string
    {
        return $this->getBicycle()->getDescription() . " + lampka przednia";
    }

    public function getPrice(): float
    {
        return $this->getBicycle()->getPrice() + 34.99;
    }
}