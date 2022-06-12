<?php

declare(strict_types = 1);

class Beverage extends Consumable implements IBeverage {
    protected $beverageType;
    protected $beverageSize;

    public function __construct(string $itemName, float $basePrice, string $type, int $option)
    {
        $this->conName = $itemName;
        $this->basePrice = $basePrice;
        $this->beverageType = $type;
        $this->beverageSize = $option;
    }

    public function setType(string $inputType){
        $this->beverageType = $inputType;
        return $this;
    }

    public function getType(): string{
        return $this->beverageType;
    }

    public function setSize(int $inputSize){
        $this->beverageSize = $inputSize;
        return $this;
    }

    public function getSize(): string{
        $sizeString = '';
        switch($this->beverageSize){
            case 1: $sizeString = 'Tall'; break;
            case 2: $sizeString = 'Grande'; break;
            case 3: $sizeString = 'Venti'; break;
        }
        return $sizeString;
    }
}