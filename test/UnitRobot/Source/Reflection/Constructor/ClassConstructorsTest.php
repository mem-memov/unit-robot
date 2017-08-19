<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection\Constructor;

use PHPUnit\Framework\TestCase;

final class ClassConstructorsTest extends TestCase
{
    public function testItCanCreateConstructor(): void
    {
        $classConstructors = new ClassConstructors();

        $class = $this->createMock(\ReflectionClass::class);

        $constructorReflection = 'some $constructorReflection value';

        $class->expects($this->once())
            ->method('getconstructor')
            ->willReturn($constructorReflection);

        $className = 'some $className value';

        $class->expects($this->once())
            ->method('getShortName')
            ->willReturn($className);

        $classConstructors->createConstructor($class);
    }
}