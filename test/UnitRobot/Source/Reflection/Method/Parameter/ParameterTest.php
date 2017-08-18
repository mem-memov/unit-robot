<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection\Method\Parameter;

use MemMemov\UnitRobot\UnitTest\UnitTest;
use MemMemov\UnitRobot\UnitTest\MethodParameters as UnitTestMethodParameters;
use MemMemov\UnitRobot\UnitTest\Builder\Declarations as UnitTestDeclarations;
use MemMemov\UnitRobot\UnitTest\Builder\ParameterDeclarations as UnitTestParameterDeclarations;
use MemMemov\UnitRobot\Source\Description\InstanceProperties;
use MemMemov\UnitRobot\Source\Description\Properties as DescriptionProperties;
use PHPUnit\Framework\TestCase;

final class ParameterTest extends TestCase
{
    protected $reflection;
    protected $type;
    protected $descriptionProperties;
    protected $comment;

    protected function setUp(): void
    {
        $this->reflection = $this->createMock(\ReflectionParameter::class);
        $this->type = 'some $this->type value';
        $this->descriptionProperties = $this->createMock(DescriptionProperties::class);
        $this->comment = $this->createMock(ParameterComment::class);
    }

    public function testItCanAddPropertyToUnitTest(): void
    {
        $parameter = new Parameter($this->reflection, $this->type, $this->descriptionProperties, $this->comment);

        $unitTest = $this->createMock(UnitTest::class);

        $unitTest->expects($this->once())
            ->method('addProperty');

        $this->reflection->expects($this->once())
            ->method('getName');

        $parameter->addPropertyToUnitTest($unitTest);
    }

    public function testItCanFillUnitTestMethod(): void
    {
        $parameter = new Parameter($this->reflection, $this->type, $this->descriptionProperties, $this->comment);

        $declarations = $this->createMock(UnitTestDeclarations::class);
        $parameterDeclarations = $this->createMock(UnitTestParameterDeclarations::class);

        $parameterDeclaration = 'some $parameterDeclaration value';

        $declarations->expects($this->once())
            ->method('createParameterDeclaration')
            ->willReturn($parameterDeclaration);

        $this->reflection->expects($this->once())
            ->method('getName');

        $parameterDeclarations->expects($this->once())
            ->method('addDeclaration');

        $parameter->fillUnitTestMethod($declarations, $parameterDeclarations);
    }

    public function testItCanDescribeProperties(): void
    {
        $parameter = new Parameter($this->reflection, $this->type, $this->descriptionProperties, $this->comment);

        $properties = $this->createMock(InstanceProperties::class);

        $this->reflection->expects($this->once())
            ->method('hasType');

        $this->reflection->expects($this->once())
            ->method('getName');

        $this->reflection->expects($this->once())
            ->method('getDeclaringClass');

        $this->reflection->expects($this->once())
            ->method('getDeclaringFunction');

        $this->reflection->expects($this->once())
            ->method('isArray');

        $this->comment->expects($this->once())
            ->method('hasTypeForArray');

        $this->collectionType = 'some $this->collectionType value';

        $this->comment->expects($this->once())
            ->method('getTypeForArray')
            ->willReturn($this->collectionType);

        $this->reflection->expects($this->once())
            ->method('getName');

        $this->property = 'some $this->property value';

        $this->descriptionProperties->expects($this->once())
            ->method('createCollectionProperty')
            ->willReturn($this->property);

        $this->reflection->expects($this->once())
            ->method('getName');

        $this->property = 'some $this->property value';

        $this->descriptionProperties->expects($this->once())
            ->method('createArrayProperty')
            ->willReturn($this->property);

        $this->reflection->expects($this->once())
            ->method('getName');

        $this->type = 'some $this->type value';

        $this->reflection->expects($this->once())
            ->method('getType')
            ->willReturn($this->type);

        $this->property = 'some $this->property value';

        $this->descriptionProperties->expects($this->once())
            ->method('createScalarProperty')
            ->willReturn($this->property);

        $this->reflection->expects($this->once())
            ->method('getName');

        $this->property = 'some $this->property value';

        $this->descriptionProperties->expects($this->once())
            ->method('createObjectProperty')
            ->willReturn($this->property);

        $this->reflection->expects($this->once())
            ->method('getName');

        $properties->expects($this->once())
            ->method('addProperty');

        $parameter->describeProperties($properties);
    }
}