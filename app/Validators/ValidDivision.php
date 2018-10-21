<?php

namespace Calculator\Validators;


class ValidDivision implements ValidatorInterface
{
    public static function isValid(array $request): bool
    {
        if( !isset($request['numero1']) || !isset($request['numero2']) ){
            return false;
        }

        if(!$request['numero1'] || !$request['numero2']){
            return false;
        }

        if( $request['numero1'] == 0 ){
            return false;
        }

        if( $request['numero2'] == 0 ){
            return false;
        }

        return true;
    }
}