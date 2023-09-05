<?php

namespace App;

use App\Immutable\Human;

class Builder{
    private ?int $height = null;
    private ?int $weight = null;
    private ?float $money = null;

    /**
     * @param int|null $weight
     * @return Builder
     */
    public function Weight(int $weight = null): self
    {
        $this->weight = $weight;
        return $this;
    }

    /**
     * @param int|null $height
     * @return Builder
     */
    public function Height(int $height = null): self
    {
        $this->height = $height;
        return $this;
    }

    /**
     * @param float|null $money
     * @return Builder
     */
    public function Money(float $money= null): self
    {
        $this->money = $money;
        return $this;
    }

    public function build(): Human{
        return new Human($this->weight, $this->height, $this->money);
    }


}