<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection\Parameter;

use MemMemov\UnitRobot\UnitTest\UnitTest;
use MemMemov\UnitRobot\UnitTest\MethodParameters as UnitTestMethodParameters;
use MemMemov\UnitRobot\UnitTest\Builder\Declarations as UnitTestDeclarations;
use MemMemov\UnitRobot\UnitTest\Builder\ParameterDeclarations as UnitTestParameterDeclarations;
use MemMemov\UnitRobot\Source\Description\InstanceProperties;
use MemMemov\UnitRobot\Source\Description\InstanceDependencies;
use MemMemov\UnitRobot\Source\Description\Property\Properties as DescriptionProperties;
use MemMemov\UnitRobot\Source\Reflection\Comment\ParameterComment;
use PHPUnit\Framework\TestCase;

final class ParameterTest extends TestCase
{
    public function testItCanAddPropertyToUnitTest(): void
    {
        $parameter = new Parameter();

        $unitTest = $this->createMock(UnitTest::class);

        $unitTest->expects($this->once())
            ->method('addProperty');

        $this->reflection->expects($this->once())
            ->method('getName');

        $parameter->addPropertyToUnitTest($unitTest);
    }

    public function testItCanFillUnitTestMethod(): void
    {
        $parameter = new Parameter();

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
        $parameter = new Parameter();

        $properties = $this->createMock(InstanceProperties::class);
        $instanceDependencies = $this->createMock(InstanceDependencies::class);

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

        $this->itemType = 'some $this->itemType value';

        $this->comment->expects($this->once())
            ->method('getTypeForArray')
            ->willReturn($this->itemType);

        $this->reflection->expects($this->once())
            ->method('getName');

        $this->isScalar = 'some $this->isScalar value';

        $this->descriptionProperties->expects($this->once())
            ->method('isScalarType')
            ->willReturn($this->isScalar);

        $this->property = 'some $this->property value';

        $this->descriptionProperties->expects($this->once())
            ->method('createScalarCollectionProperty')
            ->willReturn($this->property);

        $this->reflection->expects($this->once())
            ->method('getName');

        $instanceDependencies->expects($this->once())
            ->method('has');

        $dependency = 'some $dependency value';

        $instanceDependencies->expects($this->once())
            ->method('get')
            ->willReturn($dependency);

        $property = 'some $property value';

        $dependency->expects($this->once())
            ->method('createObjectCollectionProperty')
            ->willReturn($property);

        $this->reflection->expects($this->once())
            ->method('getName');

        $this->property = 'some $this->property value';

        $this->descriptionProperties->expects($this->once())
            ->method('createObjectCollectionProperty')
            ->willReturn($this->property);

        $this->reflection->expects($this->once())
            ->method('getName');

        $classReflection->expects($this->once())
            ->method('getNamespaceName');

        $classReflection->expects($this->once())
            ->method('getShortName');

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

        $this->isScalar = 'some $this->isScalar value';

        $this->descriptionProperties->expects($this->once())
            ->method('isScalarType')
            ->willReturn($this->isScalar);

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

        $classReflection->expects($this->once())
            ->method('getNamespaceName');

        $classReflection->expects($this->once())
            ->method('getShortName');

        $properties->expects($this->once())
            ->method('addProperty');

        $parameter->describeProperties($properties, $instanceDependencies);
    }
}