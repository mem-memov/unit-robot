<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection\Constructor;

use MemMemov\UnitRobot\Source\Reflection\Method\MethodSignature;
use MemMemov\UnitRobot\Source\Reflection\Parameter\Parameters;
use MemMemov\UnitRobot\Source\File\Text;
use MemMemov\UnitRobot\UnitTest\UnitTest;
use MemMemov\UnitRobot\Source\Description\Instance\InstanceProperties;
use MemMemov\UnitRobot\Source\Description\Instance\InstanceDependencies;
use MemMemov\UnitRobot\Source\Reflection\Comment\MethodComments;
use PHPUnit\Framework\TestCase;

final class ParameterizedConstructorTest extends TestCase
{
    protected $reflection;
    protected $methodSignature;
    protected $parameters;
    protected $methodComments;

    protected function setUp(): void
    {
        $this->reflection = $this->createMock(\ReflectionMethod::class);
        $this->methodSignature = $this->createMock(MethodSignature::class);
        $this->parameters = $this->createMock(Parameters::class);
        $this->methodComments = $this->createMock(MethodComments::class);
    }

}