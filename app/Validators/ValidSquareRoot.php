<?php

namespace Calculator\Validators;


use Calculator\Exceptions\AmountNumbersException;

class ValidSquareRoot implements ValidatorInterface
{
    public static function isValid(array $request): bool
    {
        if( !isset($request['numero1']) ){
            throw new AmountNumbersException();
        }

        if( $request['numero1'] == null ){
            throw new AmountNumbersException();
        }

        return true;
    }
}