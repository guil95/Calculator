<?php

namespace Calculator\Validators;


use Calculator\Exceptions\AmountNumbersException;
use Calculator\Schema\TwoNumbersSchema;
use JsonSchema\Validator;

class ValidSubtraction implements ValidatorInterface
{
    public static function isValid(object $request): bool
    {
        $validator = new Validator();
        $validator->validate($request, TwoNumbersSchema::getSchema());

        if(!$validator->isValid()){
            throw new AmountNumbersException();
        }

        return true;
    }
}