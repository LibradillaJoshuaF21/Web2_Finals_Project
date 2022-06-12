<?php

declare(strict_types = 1);

class Consumable implements IConsumable {

    protected $basePrice;
    protected $conName;

    public function setPrice(float $inputPrice){
        $this->basePrice = $inputPrice;
        return $this;
    }

    public function getPrice(): float{
        return $this->basePrice;
    }

    public function setName(string $inputName){
        $this->conName = $inputName;
        return $this;
    }

    public function getName(): string{
        return $this->conName;
    }
}