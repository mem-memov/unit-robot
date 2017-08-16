<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\UnitTest\Builder;

use MemMemov\UnitRobot\UnitTest\File\Text;
use PHPUnit\Framework\TestCase;

final class SimpleCallDeclarationTest extends TestCase
{
    protected $variableName;
    protected $methodName;

    protected function setUp(): void
    {
        $this->variableName = 'some $this->variableName value';
        $this->methodName = 'some $this->methodName value';
    }

    public function testItCanAppendExpectation(): void
    {
        $simpleCallDeclaration = new SimpleCallDeclaration($this->variableName, $this->methodName);

        $text = $this->createMock(Text::class);

        $text->expects($this->once())
            ->method('appendLine');

        $this->expects($this->once())
            ->method('once');

        $text->expects($this->once())
            ->method('appendLine');

        $text->expects($this->once())
            ->method('appendLine');

        $simpleCallDeclaration->appendExpectation($text);
    }
}