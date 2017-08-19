<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection;

use MemMemov\UnitRobot\Source\Reflection\Constructor\ClassConstructors;
use MemMemov\UnitRobot\Source\Reflection\Method\Methods;
use MemMemov\UnitRobot\Source\File\Text;
use MemMemov\UnitRobot\UnitTest\File\File as UnitTestFile;
use MemMemov\UnitRobot\UnitTest\UnitTests;
use MemMemov\UnitRobot\Source\Description\InstanceName;
use MemMemov\UnitRobot\Source\Description\InstanceProperties;
use MemMemov\UnitRobot\Source\Description\InstanceMethods;
use MemMemov\UnitRobot\Source\Description\InstanceDependencies;
use PHPUnit\Framework\TestCase;

final class ReflectionTest extends TestCase
{
    public function testItCanCreateTests(): void
    {
        $reflection = new Reflection();

        $sourceText = $this->createMock(Text::class);
        $unitTestFile = $this->createMock(UnitTestFile::class);

        $this->class->expects($this->once())
            ->method('isAbstract');

        $this->class->expects($this->once())
            ->method('isInterface');

        $this->unitTest = 'some $this->unitTest value';

        $this->unitTests->expects($this->once())
            ->method('createUnitTest')
            ->willReturn($this->unitTest);

        $unitTest->expects($this->once())
            ->method('setNamespace');

        $this->class->expects($this->once())
            ->method('getNamespaceName');

        $unitTest->expects($this->once())
            ->method('setClassName');

        $this->class->expects($this->once())
            ->method('getShortName');

        $this->dependencies->expects($this->once())
            ->method('addDependenciesToUnitTest');

        $this->constructor = 'some $this->constructor value';

        $this->methods->expects($this->once())
            ->method('createConstructor')
            ->willReturn($this->constructor);

        $constructor->expects($this->once())
            ->method('createTest');

        $this->methodReflections = 'some $this->methodReflections value';

        $this->class->expects($this->once())
            ->method('getMethods')
            ->willReturn($this->methodReflections);

        $methodReflection->expects($this->once())
            ->method('isConstructor');

        $this->method = 'some $this->method value';

        $this->methods->expects($this->once())
            ->method('createMethod')
            ->willReturn($this->method);

        $this->class->expects($this->once())
            ->method('getShortName');

        $method->expects($this->once())
            ->method('createTest');

        $unitTest->expects($this->once())
            ->method('write');

        $reflection->createTests($sourceText, $unitTestFile);
    }

    public function testItCanNeedsDescribing(): void
    {
        $reflection = new Reflection();

        $this->class->expects($this->once())
            ->method('isAbstract');

        $this->class->expects($this->once())
            ->method('isInterface');

        $reflection->needsDescribing();
    }

    public function testItCanDescribe(): void
    {
        $reflection = new Reflection();

        $sourceText = $this->createMock(Text::class);
        $name = $this->createMock(InstanceName::class);
        $properties = $this->createMock(InstanceProperties::class);
        $methods = $this->createMock(InstanceMethods::class);
        $dependencies = $this->createMock(InstanceDependencies::class);

        $name->expects($this->once())
            ->method('setNamespace');

        $this->class->expects($this->once())
            ->method('getNamespaceName');

        $name->expects($this->once())
            ->method('setClass');

        $this->class->expects($this->once())
            ->method('getShortName');

        $this->dependencies->expects($this->once())
            ->method('describe');

        $this->constructor = 'some $this->constructor value';

        $this->constructors->expects($this->once())
            ->method('createConstructor')
            ->willReturn($this->constructor);

        $constructor->expects($this->once())
            ->method('describeProperties');

        $reflection->describe($sourceText, $name, $properties, $methods, $dependencies);
    }
}