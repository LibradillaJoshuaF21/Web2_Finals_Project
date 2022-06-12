<?php

declare(strict_types = 1);

class Food extends Consumable implements IFood {
    protected $foodType;
    protected $foodPortion;

    public function __construct(string $itemName, float $basePrice, string $type, int $option)
    {
        $this->conName = $itemName;
        $this->basePrice = $basePrice;
        $this->foodType = $type;
        $this->foodPortion = $option;
    }

    public function setType(string $inputType){
        $this->foodType = $inputType;
        return $this;
    }

    public function getType(): string{
        return $this->foodType;
    }

    public function setPortion(int $inputPortion){
        $this->foodPortion = $inputPortion;
        return $this;
    }

    public function getPortion(): string{
        $foodPortion = '';
        switch($this->beverageSize){
            case 1: $foodPortion = 'One Portion'; break;
            case 2: $foodPortion = 'Two Portion'; break;
            case 3: $foodPortion = 'Three Portion'; break;
        }
        return $foodPortion;
    }
}