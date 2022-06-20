<?php

declare(strict_types = 1);

class Cake extends Food implements IOption {
    protected $cakeOption;


    public function __construct(string $itemName, float $basePrice, string $type, int $option, int $cakeOption)
    {
        $this->conName = $itemName;
        $this->basePrice = $basePrice;
        $this->foodType = $type;
        $this->foodPortion = $option;
        $this->cakeOption = $cakeOption;
    }

    public function setOption(int $inputOption){
        $this->cakeOption = $inputOption;
        return $this;
    }

    public function getOption2(): string{
        $optionString = '';
        switch($this->cakeOption){
            case 1: $optionString = 'Warmed'; break;
            case 2: $optionString = 'Not Warmed'; break;
            case 3: $optionString = 'Cold'; break;
        }
        return $optionString;
    }
}