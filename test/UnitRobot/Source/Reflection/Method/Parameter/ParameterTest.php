<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection\Method\Parameter;

use MemMemov\UnitRobot\UnitTest\UnitTest;
use MemMemov\UnitRobot\UnitTest\MethodParameters as UnitTestMethodParameters;
use MemMemov\UnitRobot\UnitTest\Builder\Declarations as UnitTestDeclarations;
use MemMemov\UnitRobot\UnitTest\Builder\ParameterDeclarations as UnitTestParameterDeclarations;
use PHPUnit\Framework\TestCase;

final class ParameterTest extends TestCase
{
    protected $reflection;
    protected $type;

    protected function setUp(): void
    {
        $this->reflection = $this->createMock(\ReflectionParameter::class);
        $this->type = 'some $this->type value';
    }

    public function testItCanAddPropertyToUnitTest(): void
    {
        $parameter = new Parameter($this->reflection, $this->type);

        $unitTest = $this->createMock(UnitTest::class);

        $unitTest->expects($this->once())
            ->method('addProperty');

        $this->reflection->expects($this->once())
            ->method('getName');

        $parameter->addPropertyToUnitTest($unitTest);
    }

    public function testItCanFillUnitTestMethod(): void
    {
        $parameter = new Parameter($this->reflection, $this->type);

        $declarations = $this->createMock(UnitTestDeclarations::class);
        $parameterDeclarations = $this->createMock(UnitTestParameterDeclarations::class);

        $this->reflection->expects($this->once())
            ->method('getName');

        $parameterDeclarations->expects($this->once())
            ->method('addDeclaration');

        $parameter->fillUnitTestMethod($declarations, $parameterDeclarations);
    }
}