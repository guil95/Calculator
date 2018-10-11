<?php

namespace Calculator\Operations;


class SquareRoot extends OperationAbstract {

    public function __construct(float $number)
    {
        parent::__construct($number);
    }

    public function calc():float
    {
        return (float) sqrt($this->number1);
    }

}