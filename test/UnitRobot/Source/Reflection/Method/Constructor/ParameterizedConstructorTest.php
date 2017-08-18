<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection\Method\Constructor;

use MemMemov\UnitRobot\Source\Reflection\Method\MethodSignature;
use MemMemov\UnitRobot\Source\Reflection\Method\Parameter\Parameters;
use MemMemov\UnitRobot\Source\File\Text;
use MemMemov\UnitRobot\UnitTest\UnitTest;
use MemMemov\UnitRobot\Source\Description\InstanceProperties;
use MemMemov\UnitRobot\Source\Reflection\Method\MethodComments;
use PHPUnit\Framework\TestCase;

final class ParameterizedConstructorTest extends TestCase
{
    protected $reflection;
    protected $className;
    protected $methodSignature;
    protected $parameters;
    protected $methodComments;

    protected function setUp(): void
    {
        $this->reflection = $this->createMock(\ReflectionMethod::class);
        $this->className = 'some $this->className value';
        $this->methodSignature = $this->createMock(MethodSignature::class);
        $this->parameters = $this->createMock(Parameters::class);
        $this->methodComments = $this->createMock(MethodComments::class);
    }

    public function testItCanCreateTest(): void
    {
        $parameterizedConstructor = new ParameterizedConstructor($this->reflection, $this->className, $this->methodSignature, $this->parameters, $this->methodComments);

        $text = $this->createMock(Text::class);
        $unitTest = $this->createMock(UnitTest::class);

        $this->startLine = 'some $this->startLine value';

        $this->reflection->expects($this->once())
            ->method('getStartLine')
            ->willReturn($this->startLine);

        $this->endLine = 'some $this->endLine value';

        $this->reflection->expects($this->once())
            ->method('getEndLine')
            ->willReturn($this->endLine);

        $methodString = 'some $methodString value';

        $text->expects($this->once())
            ->method('extract')
            ->willReturn($methodString);

        $this->signatureTokens = 'some $this->signatureTokens value';

        $this->methodSignature->expects($this->once())
            ->method('getTokens')
            ->willReturn($this->signatureTokens);

        $this->parameterReflections = 'some $this->parameterReflections value';

        $this->reflection->expects($this->once())
            ->method('getParameters')
            ->willReturn($this->parameterReflections);

        $this->methodComment = 'some $this->methodComment value';

        $this->methodComments->expects($this->once())
            ->method('createMethodComment')
            ->willReturn($this->methodComment);

        $this->reflection->expects($this->once())
            ->method('getDocComment');

        $this->parameters = 'some $this->parameters value';

        $this->parameters->expects($this->once())
            ->method('createMethodParameters')
            ->willReturn($this->parameters);

        $parameters->expects($this->once())
            ->method('addPropertiesToUnitTest');

        $parameterizedConstructor->createTest($text, $unitTest);
    }

    public function testItCanDescribeProperties(): void
    {
        $parameterizedConstructor = new ParameterizedConstructor($this->reflection, $this->className, $this->methodSignature, $this->parameters, $this->methodComments);

        $text = $this->createMock(Text::class);
        $properties = $this->createMock(InstanceProperties::class);

        $this->startLine = 'some $this->startLine value';

        $this->reflection->expects($this->once())
            ->method('getStartLine')
            ->willReturn($this->startLine);

        $this->endLine = 'some $this->endLine value';

        $this->reflection->expects($this->once())
            ->method('getEndLine')
            ->willReturn($this->endLine);

        $methodString = 'some $methodString value';

        $text->expects($this->once())
            ->method('extract')
            ->willReturn($methodString);

        $this->signatureTokens = 'some $this->signatureTokens value';

        $this->methodSignature->expects($this->once())
            ->method('getTokens')
            ->willReturn($this->signatureTokens);

        $this->parameterReflections = 'some $this->parameterReflections value';

        $this->reflection->expects($this->once())
            ->method('getParameters')
            ->willReturn($this->parameterReflections);

        $this->methodComment = 'some $this->methodComment value';

        $this->methodComments->expects($this->once())
            ->method('createMethodComment')
            ->willReturn($this->methodComment);

        $this->reflection->expects($this->once())
            ->method('getDocComment');

        $this->parameters = 'some $this->parameters value';

        $this->parameters->expects($this->once())
            ->method('createMethodParameters')
            ->willReturn($this->parameters);

        $parameters->expects($this->once())
            ->method('describeProperties');

        $parameterizedConstructor->describeProperties($text, $properties);
    }
}