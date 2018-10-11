<?php
require "vendor\autoload.php";

use Calculator\Operations\OperationFactory;
use Calculator\Operations\OperationExecuteBridge;

echo OperationExecuteBridge::execute(
    OperationFactory::getOperation('+',5,6)
).PHP_EOL;

echo OperationExecuteBridge::execute(
    OperationFactory::getOperation('-',2,1)
).PHP_EOL;

echo OperationExecuteBridge::execute(
    OperationFactory::getOperation('/',5,2)
).PHP_EOL;

echo OperationExecuteBridge::execute(
    OperationFactory::getOperation('*',2,8)
).PHP_EOL;

echo OperationExecuteBridge::execute(
    OperationFactory::getOperation('sqtr',25)
).PHP_EOL;

