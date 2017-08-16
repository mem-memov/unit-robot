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

    protected function setUp(): void
    {
        $this->callVariable = 'some $this->callVariable value';
        $this->method = 'some $this->method value';
        $this->resultVariable = 'some $this->resultVariable value';
    }

    public function testItCanAppendExpectation(): void
    {
        $resultCallDeclaration = new ResultCallDeclaration($this->callVariable, $this->method, $this->resultVariable);

        $text = $this->createMock(Text::class);

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