<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection\Method;

use MemMemov\UnitRobot\Source\File\Text;
use MemMemov\UnitRobot\Source\Token\MethodBodies as Tokens;
use MemMemov\UnitRobot\Source\Token\MethodBody as BodyTokens;
use PHPUnit\Framework\TestCase;

final class MethodBodyTest extends TestCase
{
    public function testItCanGetTokens(): void
    {
        $methodBody = new MethodBody();

        $text = $this->createMock(Text::class);

        $this->startLine = 'some $this->startLine value';

        $this->reflection->expects($this->once())
            ->method('getStartLine')
            ->willReturn($this->startLine);

        $this->endLine = 'some $this->endLine value';

        $this->reflection->expects($this->once())
            ->method('getEndLine')
            ->willReturn($this->endLine);

        $methodText = 'some $methodText value';

        $text->expects($this->once())
            ->method('extract')
            ->willReturn($methodText);

        $this->bodyTokens = 'some $this->bodyTokens value';

        $this->tokens->expects($this->once())
            ->method('createMethodBody')
            ->willReturn($this->bodyTokens);

        $methodBody->getTokens($text);
    }
}