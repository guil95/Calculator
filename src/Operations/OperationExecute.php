<?php

namespace Calculator\Operations;

class OperationExecute{
    public static function execute(OperationAbstract $operation)
    {
        return $operation->calc();
    }
}