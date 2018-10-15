<?php

namespace Calculator\Controller;

use Calculator\Operations\OperationFactory;
use Calculator\Operations\OperationExecuteBridge;

class CalculatorController{
    public function add($numero1, $numero2)
    {
        echo OperationExecuteBridge::execute(
                OperationFactory::getOperation('+',$numero1,$numero2)
            ).PHP_EOL;
    }

    public function sub($numero1, $numero2)
    {
        echo OperationExecuteBridge::execute(
                OperationFactory::getOperation('-',$numero1,$numero2)
            ).PHP_EOL;
    }

    public function mult($numero1, $numero2)
    {
        echo OperationExecuteBridge::execute(
                OperationFactory::getOperation('*',$numero1,$numero2)
            ).PHP_EOL;
    }

    public function div($numero1, $numero2)
    {
        echo OperationExecuteBridge::execute(
                OperationFactory::getOperation('/',$numero1,$numero2)
            ).PHP_EOL;
    }

    public function sqrt($numero1)
    {
        echo OperationExecuteBridge::execute(
                OperationFactory::getOperation('sqrt',$numero1)
            ).PHP_EOL;
    }
}