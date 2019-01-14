<?php

namespace Calculator\Validators;


interface ValidatorInterface
{
    public static function isValid(object $request): bool ;
}