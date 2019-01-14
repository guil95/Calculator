<?php

namespace Calculator\Validators;


use Calculator\Exceptions\AmountNumbersException;
use Calculator\Schema\OneNumberSchema;
use JsonSchema\Validator;

class ValidSquareRoot implements ValidatorInterface
{
    public static function isValid(object $request): bool
    {
        $validator = new Validator();
        $validator->validate($request, OneNumberSchema::getSchema());

        if(!$validator->isValid()){
            throw new AmountNumbersException();
        }

        return true;
    }
}