<?php

namespace Calculator\Operations;
use Calculator\Contracts\OperationInterface;

abstract class OperationAbstract implements OperationInterface{
    protected $number1;
    protected $number2;

    public function __construct(float $number1, float $number2 = null)
    {
        $this->number1 = $number1;
        $this->number2 = $number2;
    }
}
