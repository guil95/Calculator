<?php

namespace Test;

use Calculator\Operations\Multiplication;
use Calculator\Operations\OperationExecuteBridge;
use Calculator\Operations\OperationFactory;
use PHPUnit\Framework\TestCase;

class MultiplicationTest extends TestCase
{
    public function testMultiplication():void
    {
       $this->assertEquals(
            15,
            OperationExecuteBridge::execute(
                OperationFactory::getOperation('*',5,3)
            )
        );
    }

    public function testTypeInstance(): void
    {
        $this->assertInstanceOf(
            Multiplication::class,
            OperationFactory::getOperation('*',5,2)
        );
    }
}