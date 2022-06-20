<?php

declare(strict_types = 1);

class Tea extends Beverage implements IOption {
    protected $teaOption;


    public function __construct(string $itemName, float $basePrice, string $type, int $option, int $teaOption)
    {
        $this->conName = $itemName;
        $this->basePrice = $basePrice;
        $this->beverageType = $type;
        $this->beverageSize = $option;
        $this->teaOption = $teaOption;
    }

    public function setOption(int $inputOption){
        $this->teaOption = $inputOption;
        return $this;
    }

    public function getOption2(): string{
        $optionString = '';
        switch($this->teaOption){
            case 1: $optionString = '2% Milk'; break;
            case 2: $optionString = 'Sugar'; break;
            case 3: $optionString = 'Honey'; break;
        }
        return $optionString;
    }
}