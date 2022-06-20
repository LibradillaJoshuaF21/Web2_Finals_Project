<?php

declare(strict_types = 1);

class Salad extends Food implements IOption {
    protected $saladOption;


    public function __construct(string $itemName, float $basePrice, string $type, int $option, int $saladOption)
    {
        $this->conName = $itemName;
        $this->basePrice = $basePrice;
        $this->foodType = $type;
        $this->foodPortion = $option;
        $this->saladOption = $saladOption;
    }

    public function setOption(int $inputOption){
        $this->saladOption = $inputOption;
        return $this;
    }

    public function getOption2(): string{
        $optionString = '';
        switch($this->saladOption){
            case 1: $optionString = 'Mayonnaise'; break;
            case 2: $optionString = 'Cheese'; break;
            case 3: $optionString = 'Ketchup'; break;
        }
        return $optionString;
    }
}