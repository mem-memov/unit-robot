<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection\Method;

use MemMemov\UnitRobot\Source\Reflection\Method\Call\Calls;
use MemMemov\UnitRobot\Source\Reflection\Parameter\Parameters;
use MemMemov\UnitRobot\Source\File\Text;
use MemMemov\UnitRobot\UnitTest\UnitTest;
use MemMemov\UnitRobot\Source\Reflection\Comment\MethodComments;
use MemMemov\UnitRobot\Source\Description\InstanceDependencies;
use PHPUnit\Framework\TestCase;

final class MethodTest extends TestCase
{
    public function testItCanCreateTest(): void
    {
        $method = new Method();

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

        $this->calls = 'some $this->calls value';

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