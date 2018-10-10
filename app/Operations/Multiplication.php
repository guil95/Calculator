<?php

namespace Calculator\Operations;

use Calculator\Contracts\OperationInterface;

class Multiplication implements OperationInterface{
    private $number1;
    private $number2;

    public function __construct($number1, $number2)
    {
        $this->number1 = $number1;
        $this->number2 = $number2;
    }

    public function calc():float
    {
        return (float) $this->number1 * $this->number2;
    }

}