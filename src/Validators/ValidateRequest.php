<?php

namespace Calculator\Validators;


class ValidateRequest
{
    public static function isValid($method, $request)
    {
        switch ($method){
            case '+':
                return ValidAddition::isValid($request);
            break;

            case '-':
                return ValidSubtraction::isValid($request);
            break;

            case '/':
                return ValidDivision::isValid($request);
            break;

            case '*':
                return ValidMultiplication::isValid($request);
            break;

            case 'sqrt':
                return ValidSquareRoot::isValid($request);
            break;

        }
    }
}