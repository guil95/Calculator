<?php

namespace Calculator\Operations;

abstract class OperationAbstract{
    protected $number1;
    protected $number2;

    public function __construct(float $number1, float $number2 = null)
    {
        $this->number1 = $number1;
        $this->number2 = $number2;
    }

    public abstract function calc():float;
}
