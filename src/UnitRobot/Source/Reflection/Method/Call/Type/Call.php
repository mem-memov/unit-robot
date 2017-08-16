<?php
namespace MemMemov\UnitRobot\Source\Reflection\Method\Call\Type;

use MemMemov\UnitRobot\UnitTest\MethodCalls as UnitTestMethodCalls;
use MemMemov\UnitRobot\UnitTest\Builder\Declarations as UnitTestDeclarations;
use MemMemov\UnitRobot\UnitTest\Builder\CallDeclarations as UnitTestCallDeclarations;

interface Call extends UnitTestMethodCalls
{
    public function fillUnitTestMethod(
        UnitTestDeclarations $declarations,
        UnitTestCallDeclarations $callDeclarations
    ): void;
}