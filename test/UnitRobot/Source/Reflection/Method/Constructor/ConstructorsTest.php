<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection\Method\Constructor;

use MemMemov\UnitRobot\Source\Reflection\Method\Parameter\Parameters;
use MemMemov\UnitRobot\Source\Reflection\Method\MethodSignature;
use MemMemov\UnitRobot\Source\Token\MethodSignatures as MethodSignatureTokens;
use PHPUnit\Framework\TestCase;

final class ConstructorsTest extends TestCase
{
    protected $methodSignatureTokens;
    protected $parameters;

    protected function setUp(): void
    {
        $this->methodSignatureTokens = $this->createMock(MethodSignatureTokens::class);
        $this->parameters = $this->createMock(Parameters::class);
    }

    public function testItCanCreateEmptyConstructor(): void
    {
        $constructors = new Constructors($this->methodSignatureTokens, $this->parameters);

        $className = 'some $className value';

        $constructors->createEmptyConstructor($className);
    }

    public function testItCanCreateParameterizedConstructor(): void
    {
        $constructors = new Constructors($this->methodSignatureTokens, $this->parameters);

        $constructorReflection = $this->createMock(\ReflectionMethod::class);
        $className = 'some $className value';

        $constructors->createParameterizedConstructor($constructorReflection, $className);
    }
}