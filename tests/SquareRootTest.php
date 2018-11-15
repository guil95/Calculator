<?php

namespace Test;


use Calculator\Operations\OperationExecuteBridge;
use Calculator\Operations\OperationFactory;
use PHPUnit\Framework\TestCase;

class SquareRootTest extends TestCase
{
    public function testSquareRoot():void
    {
       $this->assertEquals(
            3,
            OperationExecuteBridge::execute(
                OperationFactory::getOperation('sqrt',9)
            )
        );
    }
}