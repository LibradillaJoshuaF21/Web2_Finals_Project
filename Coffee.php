<?php

declare(strict_types = 1);

class Coffee extends Beverage implements IOption {
    protected $coffeeOption;


    public function __construct(string $itemName, float $basePrice, string $type, int $option, int $coffeeOption)
    {
        $this->conName = $itemName;
        $this->basePrice = $basePrice;
        $this->beverageType = $type;
        $this->beverageSize = $option;
        $this->coffeeOption = $coffeeOption;
    }

    public function setOption(int $inputOption){
        $this->coffeeOption = $inputOption;
        return $this;
    }

    public function getOption2(): string{
        $optionString = '';
        switch($this->coffeeOption){
            case 1: $optionString = 'Vanilla Syrup'; break;
            case 2: $optionString = 'Caramel Syrup'; break;
            case 3: $optionString = 'Brown Sugar Syrup'; break;
        }
        return $optionString;
    }
}