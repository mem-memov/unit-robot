<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection\Method;

use MemMemov\UnitRobot\Source\Reflection\Method\Call\Calls;
use MemMemov\UnitRobot\Source\Reflection\Method\Constructor\Constructors;
use MemMemov\UnitRobot\Source\Reflection\Method\Constructor\Constructor;
use MemMemov\UnitRobot\Source\Reflection\Method\Parameter\Parameters;
use MemMemov\UnitRobot\Source\Token\MethodSignatures as MethodSignatureTokens;
use MemMemov\UnitRobot\Source\Token\MethodBodies as MethodBodyTokens;
use PHPUnit\Framework\TestCase;

final class MethodsTest extends TestCase
{
    public function testItCanCreateConstructor(): void
    {
        $methods = new Methods();

        $class = $this->createMock(\ReflectionClass::class);

        $constructorReflection = 'some $constructorReflection value';

        $class->expects($this->once())
            ->method('getconstructor')
            ->willReturn($constructorReflection);

        $className = 'some $className value';

        $class->expects($this->once())
            ->method('getShortName')
            ->willReturn($className);

        $methods->createConstructor($class);
    }

    public function testItCanCreateMethod(): void
    {
        $methods = new Methods();

        $methodReflection = $this->createMock(\ReflectionMethod::class);
        $className = 'some $className value';

        $methods->createMethod($methodReflection, $className);
    }
}