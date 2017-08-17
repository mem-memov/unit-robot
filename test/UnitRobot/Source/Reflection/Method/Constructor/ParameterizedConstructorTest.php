<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection\Method\Constructor;

use MemMemov\UnitRobot\Source\Reflection\Method\MethodSignature;
use MemMemov\UnitRobot\Source\Reflection\Method\Parameter\Parameters;
use MemMemov\UnitRobot\Source\File\Text;
use MemMemov\UnitRobot\UnitTest\UnitTest;
use PHPUnit\Framework\TestCase;

final class ParameterizedConstructorTest extends TestCase
{
    public function testItCanCreateTest(): void
    {
        $parameterizedConstructor = new ParameterizedConstructor();

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

        $this->parameters = 'some $this->parameters value';

        $this->parameters->expects($this->once())
            ->method('createMethodParameters')
            ->willReturn($this->parameters);

        $parameters->expects($this->once())
            ->method('addPropertiesToUnitTest');

        $parameterizedConstructor->createTest($text, $unitTest);
    }
}