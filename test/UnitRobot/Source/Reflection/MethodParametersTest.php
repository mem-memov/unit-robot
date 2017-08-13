<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection;

use MemMemov\UnitRobot\UnitTest\UnitTest;
use MemMemov\UnitRobot\UnitTest\MethodParameters as UnitTestMethodParameters;
use MemMemov\UnitRobot\UnitTest\Builder\Declarations as UnitTestDeclarations;
use MemMemov\UnitRobot\UnitTest\Builder\ParameterDeclarations as UnitTestParameterDeclarations;
use PHPUnit\Framework\TestCase;

final class MethodParametersTest extends TestCase
{
    protected $parameters;

    protected function setUp(): void
    {
        $this->parameters = [];
    }

    public function testItCanAddPropertiesToUnitTest(): void
    {
        $methodParameters = new MethodParameters($this->parameters);

        $methodParameters->addPropertiesToUnitTest($unitTest);
    }

    public function testItCanFillUnitTestMethod(): void
    {
        $methodParameters = new MethodParameters($this->parameters);

        $methodParameters->fillUnitTestMethod($declarations, $parameterDeclarations);
    }
}