<?php

namespace Calculator\Validators;


use Calculator\Exceptions\AmountNumbersException;
use Calculator\Exceptions\DivisionByZeroException;
use Calculator\Schema\TwoNumbersSchema;
use JsonSchema\Validator;

class ValidDivision implements ValidatorInterface
{
    public static function isValid(object $request): bool
    {

        $validator = new Validator();
        $validator->validate($request, TwoNumbersSchema::getSchema());

        if(!$validator->isValid()){
            throw new AmountNumbersException();
        }

        if( $request->number2 == 0 ){
            throw new DivisionByZeroException();
        }


        return true;
    }
}