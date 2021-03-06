<?php

namespace Test;

use Calculator\Operations\Division;
use Calculator\Operations\OperationExecute;
use Calculator\Operations\OperationFactory;
use PHPUnit\Framework\TestCase;

class DivisionTest extends TestCase
{
    public function testDivision():void
    {
       $this->assertEquals(
            2.5,
            OperationExecute::execute(
                OperationFactory::getOperation('/',5,2)
            )
        );
    }

    public function testInstanceOf(): void
    {
        $this->assertInstanceOf(
            Division::class,
            OperationFactory::getOperation('/',5,5)
        );
    }

}