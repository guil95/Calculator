<?php

namespace Calculator\Operations;

class Addition extends OperationAbstract {

    public function calc():float
    {
        return (float) $this->number1 + $this->number2;
    }

}