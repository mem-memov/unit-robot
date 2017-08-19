<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection\Method;

use MemMemov\UnitRobot\Source\Reflection\Method\Call\Calls;
use MemMemov\UnitRobot\Source\Reflection\Method\Parameter\Parameters;
use MemMemov\UnitRobot\Source\Token\MethodSignatures as MethodSignatureTokens;
use MemMemov\UnitRobot\Source\Token\MethodBodies as MethodBodyTokens;
use MemMemov\UnitRobot\Source\Reflection\Method\MethodComments;
use PHPUnit\Framework\TestCase;

final class MethodsTest extends TestCase
{
    public function testItCanCreateMethod(): void
    {
        $methods = new Methods();

        $methodReflection = $this->createMock(\ReflectionMethod::class);
        $className = 'some $className value';

        $methods->createMethod($methodReflection, $className);
    }
}