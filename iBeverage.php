<?php

interface IBeverage {
    public function setType(string $inputType);
    public function getType();
    public function setSize(int $inputSize);
    public function getSize(): string;
}