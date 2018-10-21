<?php

namespace Calculator\Validators;


class ValidSquareRoot implements ValidatorInterface
{
    public static function isValid(array $request): bool
    {
        if( !isset($request['numero1']) ){
            return false;
        }

        if( !$request['numero1'] ){
            return false;
        }

        return true;
    }
}