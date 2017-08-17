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
    protected $methodSignatureTokens;
    protected $methodBodyTokens;
    protected $parameters;
    protected $calls;
    protected $constructors;

    protected function setUp(): void
    {
        $this->methodSignatureTokens = $this->createMock(MethodSignatureTokens::class);
        $this->methodBodyTokens = $this->createMock(MethodBodyTokens::class);
        $this->parameters = $this->createMock(Parameters::class);
        $this->calls = $this->createMock(Calls::class);
        $this->constructors = $this->createMock(Constructors::class);
    }

    public function testItCanCreateConstructor(): void
    {
        $methods = new Methods($this->methodSignatureTokens, $this->methodBodyTokens, $this->parameters, $this->calls, $this->constructors);

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
        $methods = new Methods($this->methodSignatureTokens, $this->methodBodyTokens, $this->parameters, $this->calls, $this->constructors);

        $methodReflection = $this->createMock(\ReflectionMethod::class);
        $className = 'some $className value';

        $methods->createMethod($methodReflection, $className);
    }
}