<?php

namespace Calculator\Operations;
use Calculator\Contracts\OperationInterface;

class OperationExecuteBridge{
    public static function execute(OperationInterface $operation)
    {
        return $operation->calc();
    }
}