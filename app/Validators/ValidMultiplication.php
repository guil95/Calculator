<?php

namespace Calculator\Validators;


class ValidMultiplication implements ValidatorInterface
{
    public static function isValid(array $request): bool
    {
        if(!isset($request['numero1']) || !isset($request['numero2'])){
            return false;
        }

        if(!$request['numero1'] || !$request['numero2']){
            return false;
        }

        return true;
    }
}