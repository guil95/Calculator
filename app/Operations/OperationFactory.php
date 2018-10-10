<?php

namespace Calculator\Operations;

use Calculator\Contracts\OperationInterface;

class OperationFactory{

    public static function getOperation($method,$number1, $number2): OperationInterface
    {
        switch ($method){
            case '+':
                return new Addition($number1, $number2);
            break;

            case '-':
                return new Subtraction($number1, $number2);
            break;

            case '*':
                return new Multiplication($number1, $number2);
            break;

            case '/':
                return new Division($number1, $number2);
            break;

        }
    }
}