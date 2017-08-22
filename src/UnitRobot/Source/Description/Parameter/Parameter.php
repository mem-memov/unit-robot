<?php
namespace MemMemov\UnitRobot\Source\Description\Parameter;

use MemMemov\UnitRobot\UnitTest\Builder\Declarations as UnitTestDeclarations;
use MemMemov\UnitRobot\UnitTest\Builder\ParameterDeclarations as UnitTestParameterDeclarations;

interface Parameter
{
    public function fillUnitTestMethod(
        UnitTestDeclarations $declarations,
        UnitTestParameterDeclarations $parameterDeclarations
    ): void;
}