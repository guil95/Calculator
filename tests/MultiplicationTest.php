<?php

namespace Test;

use Calculator\Operations\Multiplication;
use Calculator\Operations\OperationExecute;
use Calculator\Operations\OperationFactory;
use PHPUnit\Framework\TestCase;

class MultiplicationTest extends TestCase
{
    public function testMultiplication():void
    {
       $this->assertEquals(
            15,
            OperationExecute::execute(
                OperationFactory::getOperation('*',5,3)
            )
        );
    }

    public function testInstanceOf(): void
    {
        $this->assertInstanceOf(
            Multiplication::class,
            OperationFactory::getOperation('*',5,2)
        );
    }
}