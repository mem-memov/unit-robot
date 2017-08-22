<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection\Method;

use MemMemov\UnitRobot\Source\Reflection\Method\Call\Calls;
use MemMemov\UnitRobot\Source\Reflection\Parameter\Parameters;
use MemMemov\UnitRobot\Source\File\Text;
use MemMemov\UnitRobot\UnitTest\UnitTest;
use MemMemov\UnitRobot\Source\Reflection\Comment\MethodComments;
use MemMemov\UnitRobot\Source\Reflection\Method\ReturnType\ReturnTypes;
use MemMemov\UnitRobot\Source\Description\Instance\InstanceDependencies;
use MemMemov\UnitRobot\Source\Description\Signature\Signatures;
use MemMemov\UnitRobot\Source\Description\Signature\Signature;
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
    protected $returnTypes;

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
        $this->returnTypes = $this->createMock(ReturnTypes::class);
    }

    public function testItCanDescribeSignature(): void
    {
        $method = new Method($this->reflection, $this->className, $this->methodSignature, $this->methodBody, $this->parameters, $this->calls, $this->methodComments, $this->signatures, $this->returnTypes);

        $text = $this->createMock(Text::class);
        $instanceDependencies = $this->createMock(InstanceDependencies::class);

        $method->describeSignature($text, $instanceDependencies);
    }
}