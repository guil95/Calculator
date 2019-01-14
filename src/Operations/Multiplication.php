<?php

namespace Calculator\Operations;

class Multiplication extends OperationAbstract {

    public function calc():float
    {
        return (float) $this->number1 * $this->number2;
    }

}