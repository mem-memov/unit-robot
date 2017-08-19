<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection\Method;

use MemMemov\UnitRobot\Source\Reflection\Method\Call\Calls;
use MemMemov\UnitRobot\Source\Reflection\Parameter\Parameters;
use MemMemov\UnitRobot\Source\File\Text;
use MemMemov\UnitRobot\UnitTest\UnitTest;
use MemMemov\UnitRobot\Source\Reflection\Comment\MethodComments;
use MemMemov\UnitRobot\Source\Description\Instance\InstanceDependencies;
use MemMemov\UnitRobot\Source\Description\Signature\Signatures;
use MemMemov\UnitRobot\Source\Description\Signature\Signature;
use MemMemov\UnitRobot\Source\Description\Type\Types;
use PHPUnit\Framework\TestCase;

final class MethodTest extends TestCase
{
    protected $reflection;
    protected $className;
    protected $methodSignature;
    protected $methodBody;
    protected $parameters;
    protected $calls;
    protected $methodComments;
    protected $signatures;
    protected $types;

    protected function setUp(): void
    {
        $this->reflection = $this->createMock(\ReflectionMethod::class);
        $this->className = 'some $this->className value';
        $this->methodSignature = $this->createMock(MethodSignature::class);
        $this->methodBody = $this->createMock(MethodBody::class);
        $this->parameters = $this->createMock(Parameters::class);
        $this->calls = $this->createMock(Calls::class);
        $this->methodComments = $this->createMock(MethodComments::class);
        $this->signatures = $this->createMock(Signatures::class);
        $this->types = $this->createMock(Types::class);
    }

}