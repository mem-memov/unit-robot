<?php
namespace MemMemov\UnitRobot\UnitTest;

use MemMemov\UnitRobot\UnitTest\Builder\Declarations;
use MemMemov\UnitRobot\UnitTest\Builder\CallDeclarations;

interface MethodCalls
{
    public function fillUnitTestMethod(
        Declarations $declarations,
        CallDeclarations $callDeclarations
    ): void;
}