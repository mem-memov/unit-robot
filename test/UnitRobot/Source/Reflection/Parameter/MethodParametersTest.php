<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection\Parameter;

use MemMemov\UnitRobot\UnitTest\UnitTest;
use MemMemov\UnitRobot\UnitTest\MethodParameters as UnitTestMethodParameters;
use MemMemov\UnitRobot\UnitTest\Builder\Declarations as UnitTestDeclarations;
use MemMemov\UnitRobot\UnitTest\Builder\ParameterDeclarations as UnitTestParameterDeclarations;
use MemMemov\UnitRobot\Source\Description\InstanceProperties;
use MemMemov\UnitRobot\Source\Description\InstanceDependencies;
use PHPUnit\Framework\TestCase;

final class MethodParametersTest extends TestCase
{
    public function testItCanAddPropertiesToUnitTest(): void
    {
        $methodParameters = new MethodParameters();

        $unitTest = $this->createMock(UnitTest::class);

        $parameter->expects($this->once())
            ->method('addPropertyToUnitTest');

        $methodParameters->addPropertiesToUnitTest($unitTest);
    }

    public function testItCanFillUnitTestMethod(): void
    {
        $methodParameters = new MethodParameters();

        $declarations = $this->createMock(UnitTestDeclarations::class);
        $parameterDeclarations = $this->createMock(UnitTestParameterDeclarations::class);

        $parameter->expects($this->once())
            ->method('fillUnitTestMethod');

        $methodParameters->fillUnitTestMethod($declarations, $parameterDeclarations);
    }

    public function testItCanDescribeProperties(): void
    {
        $methodParameters = new MethodParameters();

        $properties = $this->createMock(InstanceProperties::class);
        $instanceDependencies = $this->createMock(InstanceDependencies::class);

        $parameter->expects($this->once())
            ->method('describeProperties');

        $methodParameters->describeProperties($properties, $instanceDependencies);
    }
}