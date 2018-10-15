<?php

namespace Calculator\Operations;

use Calculator\Contracts\OperationInterface;

class OperationFactory{

    public static function getOperation(string $method, float $number1, float $number2 = null): OperationInterface
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

            case 'sqrt':
                return new SquareRoot($number1);
            break;

        }
    }
}