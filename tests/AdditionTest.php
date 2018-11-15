<?php

namespace Test;

use Calculator\Operations\Addition;
use Calculator\Operations\OperationExecuteBridge;
use Calculator\Operations\OperationFactory;
use PHPUnit\Framework\TestCase;

class AdditionTest extends TestCase
{
    public function testAddition():void
    {
       $this->assertEquals(
            10.2,
            OperationExecuteBridge::execute(
                OperationFactory::getOperation('+',5,5.2)
            )
        );
    }

    public function testTypeInstance(): void
    {
        $this->assertInstanceOf(
            Addition::class,
            OperationFactory::getOperation('+',5,5)
        );
    }
}