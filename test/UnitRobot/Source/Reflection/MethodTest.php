<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection;

use MemMemov\UnitRobot\Source\File\Text;
use MemMemov\UnitRobot\UnitTest\UnitTest;
use PHPUnit\Framework\TestCase;

final class MethodTest extends TestCase
{
    protected $reflection;
    protected $methodSignature;
    protected $methodBody;
    protected $parameters;

    protected function setUp(): void
    {
        $this->reflection = $this->createMock(\ReflectionMethod::class);
        $this->methodSignature = $this->createMock(MethodSignature::class);
        $this->methodBody = $this->createMock(MethodBody::class);
        $this->parameters = $this->createMock(Parameters::class);
    }

    public function testItCanCreateTests(): void
    {
        $method = new Method($this->reflection, $this->methodSignature, $this->methodBody, $this->parameters);
    }
}