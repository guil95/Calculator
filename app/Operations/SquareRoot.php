<?php

namespace Calculator\Operations;

class SquareRoot extends OperationAbstract {

    public function calc(): float
    {
        return sqrt($this->number1);
    }

    public function __construct(float $number)
    {
        parent::__construct($number);
    }

}