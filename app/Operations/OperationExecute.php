<?php

namespace Calculator\Operations;

class OperationExecuteBridge{
    public static function execute(OperationAbstract $operation)
    {
        return $operation->calc();
    }
}