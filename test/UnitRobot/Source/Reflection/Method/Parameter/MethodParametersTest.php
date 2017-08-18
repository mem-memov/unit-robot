<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection\Method\Parameter;

use MemMemov\UnitRobot\UnitTest\UnitTest;
use MemMemov\UnitRobot\UnitTest\MethodParameters as UnitTestMethodParameters;
use MemMemov\UnitRobot\UnitTest\Builder\Declarations as UnitTestDeclarations;
use MemMemov\UnitRobot\UnitTest\Builder\ParameterDeclarations as UnitTestParameterDeclarations;
use MemMemov\UnitRobot\Source\Description\InstanceProperties;
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

        $unitTest = $this->createMock(UnitTest::class);

        $parameter->expects($this->once())
            ->method('addPropertyToUnitTest');

        $methodParameters->addPropertiesToUnitTest($unitTest);
    }

    public function testItCanFillUnitTestMethod(): void
    {
        $methodParameters = new MethodParameters($this->parameters);

        $declarations = $this->createMock(UnitTestDeclarations::class);
        $parameterDeclarations = $this->createMock(UnitTestParameterDeclarations::class);

        $parameter->expects($this->once())
            ->method('fillUnitTestMethod');

        $methodParameters->fillUnitTestMethod($declarations, $parameterDeclarations);
    }

    public function testItCanDescribeProperties(): void
    {
        $methodParameters = new MethodParameters($this->parameters);

        $properties = $this->createMock(InstanceProperties::class);

        $parameter->expects($this->once())
            ->method('describeProperties');

        $methodParameters->describeProperties($properties);
    }
}