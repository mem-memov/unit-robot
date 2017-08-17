<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\UnitTest\Builder;

use MemMemov\UnitRobot\UnitTest\File\Text;
use PHPUnit\Framework\TestCase;

final class ResultCallDeclarationTest extends TestCase
{
    public function testItCanAppendExpectation(): void
    {
        $resultCallDeclaration = new ResultCallDeclaration();

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