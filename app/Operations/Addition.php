<?php

namespace Calculator\Operations;

class Addition extends OperationAbstract {

    public function __construct(float $number1, float $number2)
    {
        parent::__construct($number1, $number2);
    }

    public function calc():float
    {
        return (float) $this->number1 + $this->number2;
    }

}