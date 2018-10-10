<?php
require "vendor\autoload.php";

use Calculator\Operations\OperationFactory;
use Calculator\Operations\OperationExecuteBridge;

echo OperationExecuteBridge::execute(
    OperationFactory::getOperation('+',2,1)
);

echo OperationExecuteBridge::execute(
    OperationFactory::getOperation('-',2,1)
);

echo OperationExecuteBridge::execute(
    OperationFactory::getOperation('/',5,2)
);

echo OperationExecuteBridge::execute(
    OperationFactory::getOperation('*',2,1)
);

echo OperationExecuteBridge::execute(
    OperationFactory::getOperation('sqtr',9)
);

