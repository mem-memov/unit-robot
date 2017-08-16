<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\UnitTest\Builder;

use MemMemov\UnitRobot\UnitTest\File\Text;
use PHPUnit\Framework\TestCase;

final class ResultCallDeclarationTest extends TestCase
{
    protected $callVariable;
    protected $method;
    protected $resultVariable;
    protected $resultMock;

    protected function setUp(): void
    {
        $this->callVariable = 'some $this->callVariable value';
        $this->method = 'some $this->method value';
        $this->resultVariable = 'some $this->resultVariable value';
        $this->resultMock = $this->createMock(MockDeclaration::class);
    }

    public function testItCanAppendExpectation(): void
    {
        $resultCallDeclaration = new ResultCallDeclaration($this->callVariable, $this->method, $this->resultVariable, $this->resultMock);

        $text = $this->createMock(Text::class);

        $this->resultMock->expects($this->once())
            ->method('append');

        $text->expects($this->once())
            ->method('appendLine');

        $text->expects($this->once())
            ->method('appendLine');

        $this->expects($this->once())
            ->method('once');

        $text->expects($this->once())
            ->method('appendLine');

        $text->expects($this->once())
            ->method('appendLine');

        $text->expects($this->once())
            ->method('appendLine');

        $resultCallDeclaration->appendExpectation($text);
    }
}