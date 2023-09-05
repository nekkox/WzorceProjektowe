<?php

namespace App\Immutable;

use ErrorException;
use Exception;

class Human
{
  readonly  protected ?int $height;
  readonly  protected ?int $weight;
  readonly  protected ?float $money;

    public function __construct(?int $height,?int $weight, ?float $money)
    {
        $this->height =$height;
        $this->weight =$weight;
        $this->money =$money;
    }

    public function getHeight() :int{
      return $this->height;
    }

    /**
     * @param int $height
     */
    public function setHeight(int $height): Human
    {

       return new Human($height,$this->weight,$this->money);
    }

    /**
     * @return int
     */
    public function getWeight(): int
    {
        return $this->weight;
    }

    /**
     * @param int $weight
     */
    public function setWeight(int $weight): Human
    {
        return new Human($this->height,$weight,$this->money);
    }

    /**
     * @return float
     */
    public function getMoney(): float
    {
        return $this->money;
    }

    /**
     * @param float $money
     */
    public function setMoney(float $money): Human
    {
        return new Human($this->height,$this->weight,$money);
    }

    public function AddMoney(float $moneyToAdd){

        return new Human($this->height,$this->weight,$this->money+$moneyToAdd);
    }

    public function __toString(): string
    {
       return "Height: ". $this->height . ", Weight: ". $this->weight. ", Money: ". $this->money;
    }

 /*   public function useBuilder (Human $human) : Builder{
       return new Builder($human->getWeight(),$human->getHeight(),$human->getMoney());
    }*/



}

