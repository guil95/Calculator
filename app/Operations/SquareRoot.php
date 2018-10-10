<?php

namespace Calculator\Operations;

use Calculator\Contracts\OperationInterface;

class SquareRoot implements OperationInterface{
    private $number;

    public function __construct($number)
    {
        $this->number = $number;
    }

    public function calc():float
    {
        return (float) sqrt($this->number);
    }

}