<?php

interface IFood {
    public function setType(string $inputType);
    public function getType();
    public function setPortion(int $inputPortion);
    public function getPortion(): string;
}