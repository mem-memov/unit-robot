<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection\Method;

use MemMemov\UnitRobot\Source\Reflection\Method\Call\Calls;
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

    protected function setUp(): void
    {
        $this->methodSignatureTokens = $this->createMock(MethodSignatureTokens::class);
        $this->methodBodyTokens = $this->createMock(MethodBodyTokens::class);
        $this->parameters = $this->createMock(Parameters::class);
        $this->calls = $this->createMock(Calls::class);
    }

    public function testItCanCreateMethod(): void
    {
        $methods = new Methods($this->methodSignatureTokens, $this->methodBodyTokens, $this->parameters, $this->calls);

        $methodReflection = $this->createMock(\ReflectionMethod::class);
        $className = 'some $className value';

        $methods->createMethod($methodReflection, $className);
    }
}