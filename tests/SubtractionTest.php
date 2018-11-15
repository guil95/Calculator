<?php

namespace Test;

use Calculator\Operations\OperationExecuteBridge;
use Calculator\Operations\OperationFactory;
use Calculator\Operations\Subtraction;
use PHPUnit\Framework\TestCase;

class SubtractionTest extends TestCase
{
    public function testSubtraction():void
    {
       $this->assertEquals(
            7,
            OperationExecuteBridge::execute(
                OperationFactory::getOperation('-',9,2)
            )
        );
    }

    public function testInstanceOf(): void
    {
        $this->assertInstanceOf(
            Subtraction::class,
            OperationFactory::getOperation('-',9,2)
        );
    }
}