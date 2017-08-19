<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection\Constructor;

use MemMemov\UnitRobot\Source\Reflection\Parameter\Parameters;
use MemMemov\UnitRobot\Source\Reflection\Method\MethodSignature;
use MemMemov\UnitRobot\Source\Token\MethodSignatures as MethodSignatureTokens;
use MemMemov\UnitRobot\Source\Reflection\Method\MethodComments;
use PHPUnit\Framework\TestCase;

final class ConstructorsTest extends TestCase
{
    public function testItCanCreateEmptyConstructor(): void
    {
        $constructors = new Constructors();

        $className = 'some $className value';

        $constructors->createEmptyConstructor($className);
    }

    public function testItCanCreateParameterizedConstructor(): void
    {
        $constructors = new Constructors();

        $constructorReflection = $this->createMock(\ReflectionMethod::class);
        $className = 'some $className value';

        $constructors->createParameterizedConstructor($constructorReflection, $className);
    }
}