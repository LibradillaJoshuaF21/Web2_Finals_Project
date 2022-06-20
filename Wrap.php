<?php

declare(strict_types = 1);

class Wrap extends Food implements IOption {
    protected $wrapOption;


    public function __construct(string $itemName, float $basePrice, string $type, int $option, int $wrapOption)
    {
        $this->conName = $itemName;
        $this->basePrice = $basePrice;
        $this->foodType = $type;
        $this->foodPortion = $option;
        $this->wrapOption = $wrapOption;
    }

    public function setOption(int $inputOption){
        $this->wrapOption = $inputOption;
        return $this;
    }

    public function getOption2(): string{
        $optionString = '';
        switch($this->wrapOption){
            case 1: $optionString = '1 Sriracha Packet'; break;
            case 2: $optionString = '2 Sriracha Packets'; break;
            case 3: $optionString = '3 Sriracha Packets'; break;
        }
        return $optionString;
    }
}