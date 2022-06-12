<?php

interface IConsumable{
    public function setPrice(float $inputPrice);
    public function getPrice(): float;
    public function setName(string $inputName);
    public function getName(): string;
}