<?php

namespace Calculator\Validators;


use Calculator\Exceptions\AmountNumbersException;
use Calculator\Exceptions\DivisionByZeroException;

class ValidDivision implements ValidatorInterface
{
    public static function isValid(array $request): bool
    {
        if( !isset($request['numero1']) || !isset($request['numero2']) ){
            throw new AmountNumbersException();
        }

        if( $request['numero1'] == null || $request['numero2'] == null ){
            throw new AmountNumbersException();
        }

        if( $request['numero2'] == 0 ){
            throw new DivisionByZeroException();
        }

        return true;
    }
}