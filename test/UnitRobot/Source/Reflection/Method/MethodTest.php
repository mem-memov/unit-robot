<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection\Method;

use MemMemov\UnitRobot\Source\Reflection\Method\Call\Calls;
use MemMemov\UnitRobot\Source\Reflection\Method\Parameter\Parameters;
use MemMemov\UnitRobot\Source\File\Text;
use MemMemov\UnitRobot\UnitTest\UnitTest;
use PHPUnit\Framework\TestCase;

final class MethodTest extends TestCase
{
    protected $reflection;
    protected $className;
    protected $methodSignature;
    protected $methodBody;
    protected $parameters;
    protected $calls;

    protected function setUp(): void
    {
        $this->reflection = $this->createMock(\ReflectionMethod::class);
        $this->className = 'some $this->className value';
        $this->methodSignature = $this->createMock(MethodSignature::class);
        $this->methodBody = $this->createMock(MethodBody::class);
        $this->parameters = $this->createMock(Parameters::class);
        $this->calls = $this->createMock(Calls::class);
    }

    public function testItCanCreateTest(): void
    {
        $method = new Method($this->reflection, $this->className, $this->methodSignature, $this->methodBody, $this->parameters, $this->calls);

        $text = $this->createMock(Text::class);
        $unitTest = $this->createMock(UnitTest::class);

        $this->reflection->expects($this->once())
            ->method('getStartLine')
            ->willReturn($this->startLine);

        $this->reflection->expects($this->once())
            ->method('getEndLine')
            ->willReturn($this->endLine);

        $text->expects($this->once())
            ->method('extract')
            ->willReturn($methodString);

        $this->methodSignature->expects($this->once())
            ->method('getTokens')
            ->willReturn($this->signatureTokens);

        $this->reflection->expects($this->once())
            ->method('getParameters')
            ->willReturn($this->parameterReflections);

        $this->parameters->expects($this->once())
            ->method('createMethodParameters')
            ->willReturn($this->parameters);

        $this->reflection->expects($this->once())
            ->method('isConstructor');

        $parameters->expects($this->once())
            ->method('addPropertiesToUnitTest');

        $this->calls->expects($this->once())
            ->method('createMethodCalls')
            ->willReturn($this->calls);

        $unitTest->expects($this->once())
            ->method('addMethod');

        $this->reflection->expects($this->once())
            ->method('getName');

        $method->createTest($text, $unitTest);
    }
}