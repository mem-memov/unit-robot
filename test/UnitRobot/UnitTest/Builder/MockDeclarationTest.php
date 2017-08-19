<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\UnitTest\Builder;

use MemMemov\UnitRobot\UnitTest\File\Text;
use PHPUnit\Framework\TestCase;

final class MockDeclarationTest extends TestCase
{
    public function testItCanAppend(): void
    {
        $mockDeclaration = new MockDeclaration();

        $text = $this->createMock(Text::class);

        $text->expects($this->once())
            ->method('appendLine');

        $text->expects($this->once())
            ->method('appendLine');

        $text->expects($this->once())
            ->method('appendLine');

        $text->expects($this->once())
            ->method('appendLine');

        $text->expects($this->once())
            ->method('appendLine');

        $this->expects($this->once())
            ->method('createMock');

        $mockDeclaration->append($text);
    }
}