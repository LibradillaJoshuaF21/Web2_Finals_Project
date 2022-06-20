<?php

declare(strict_types = 1);

class Frappe extends Beverage implements IOption {
    protected $frappeOption;


    public function __construct(string $itemName, float $basePrice, string $type, int $option, int $frappeOption)
    {
        $this->conName = $itemName;
        $this->basePrice = $basePrice;
        $this->beverageType = $type;
        $this->beverageSize = $option;
        $this->frappeOption = $frappeOption;
    }

    public function setOption(int $inputOption){
        $this->frappeOption = $inputOption;
        return $this;
    }

    public function getOption2(): string{
        $optionString = '';
        switch($this->frappeOption){
            case 1: $optionString = '2% Milk'; break;
            case 2: $optionString = 'Nonfat Milk'; break;
            case 3: $optionString = 'Whole Milk'; break;
        }
        return $optionString;
    }
}