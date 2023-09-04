<?php

namespace Bicycle;

abstract class BicycleDecorator extends Bicycle
{
    private Bicycle $bicycle;

    public function __construct(Bicycle $bicycle)
    {
        $this->bicycle =$bicycle;
    }

    public function getBicycle(): Bicycle{
        return  $this->bicycle;
    }


    public function setBicycle(Bicycle $bike): void{
        $this->bicycle = $bike;
    }

}