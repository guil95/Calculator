<?php

namespace Calculator\Validators;


interface ValidatorInterface
{
    public static function isValid(array $request): bool ;
}