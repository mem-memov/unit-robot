<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection\Parameter;

use MemMemov\UnitRobot\UnitTest\UnitTest;
use MemMemov\UnitRobot\UnitTest\MethodParameters as UnitTestMethodParameters;
use MemMemov\UnitRobot\UnitTest\Builder\Declarations as UnitTestDeclarations;
use MemMemov\UnitRobot\UnitTest\Builder\ParameterDeclarations as UnitTestParameterDeclarations;
use MemMemov\UnitRobot\Source\Description\Instance\InstanceProperties;
use MemMemov\UnitRobot\Source\Description\Instance\InstanceDependencies;
use MemMemov\UnitRobot\Source\Description\Property\Properties as DescriptionProperties;
use MemMemov\UnitRobot\Source\Description\Property\Property as DescriptionProperty;
use MemMemov\UnitRobot\Source\Description\Parameter\Parameters as DescriptionParameters;
use MemMemov\UnitRobot\Source\Description\Parameter\Parameter as DescriptionParameter;
use MemMemov\UnitRobot\Source\Reflection\Comment\ParameterComment;
use PHPUnit\Framework\TestCase;

final class ParameterTest extends TestCase
{
    protected $reflection;
    protected $type;
    protected $descriptionProperties;
    protected $descriptionParameters;
    protected $comment;

    protected function setUp(): void
    {
        $this->reflection = $this->createMock(\ReflectionParameter::class);
        $this->type = 'some $this->type value';
        $this->descriptionProperties = $this->createMock(DescriptionProperties::class);
        $this->descriptionParameters = $this->createMock(DescriptionParameters::class);
        $this->comment = $this->createMock(ParameterComment::class);
    }

    public function testItCanAddPropertyToUnitTest(): void
    {
        $parameter = new Parameter($this->reflection, $this->type, $this->descriptionProperties, $this->descriptionParameters, $this->comment);

        $unitTest = $this->createMock(UnitTest::class);

        $parameter->addPropertyToUnitTest($unitTest);
    }

    public function testItCanFillUnitTestMethod(): void
    {
        $parameter = new Parameter($this->reflection, $this->type, $this->descriptionProperties, $this->descriptionParameters, $this->comment);

        $declarations = $this->createMock(UnitTestDeclarations::class);
        $parameterDeclarations = $this->createMock(UnitTestParameterDeclarations::class);

        $parameter->fillUnitTestMethod($declarations, $parameterDeclarations);
    }

    public function testItCanDescribeProperties(): void
    {
        $parameter = new Parameter($this->reflection, $this->type, $this->descriptionProperties, $this->descriptionParameters, $this->comment);

        $instanceDependencies = $this->createMock(InstanceDependencies::class);

        $parameter->describeProperties($instanceDependencies);
    }

    public function testItCanDescribeSignature(): void
    {
        $parameter = new Parameter($this->reflection, $this->type, $this->descriptionProperties, $this->descriptionParameters, $this->comment);

        $parameter->describeSignature();
    }
}