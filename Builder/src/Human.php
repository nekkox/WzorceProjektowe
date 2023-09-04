<?php

namespace immutable;

class Human
{
  readonly  private ?int $height;
  readonly  private ?int $weight;
  readonly  private ?float $money;

    public function __construct($height,$weight,$money)
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

    public function AddMoney($moneyToAdd){

        return new Human($this->height,$this->weight,$this->money+$moneyToAdd);
    }

    public function __toString(): string
    {
       return "Height: ". $this->height . ", Weight: ". $this->weight. ", Money: ". $this->money;
    }
}