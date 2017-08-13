<?php
namespace MemMemov\UnitRobot\UnitTest;

use MemMemov\UnitRobot\UnitTest\Builder\Declarations;
use MemMemov\UnitRobot\UnitTest\Builder\ParameterDeclarations;

interface MethodParameters
{
    public function fillUnitTestMethod(
        Declarations $declarations,
        ParameterDeclarations $parameterDeclarations
    ): void;
}