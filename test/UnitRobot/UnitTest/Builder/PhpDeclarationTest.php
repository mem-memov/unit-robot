<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\UnitTest\Builder;

use MemMemov\UnitRobot\UnitTest\File\Text;
use PHPUnit\Framework\TestCase;

final class PhpDeclarationTest extends TestCase
{
    public function testItCanAppend(): void
    {
        $phpDeclaration = new PhpDeclaration();

        $text = $this->createMock(Text::class);

        $text->expects($this->once())
            ->method('appendLine');

        $text->expects($this->once())
            ->method('appendLine');

        $text->expects($this->once())
            ->method('appendLine');

        $phpDeclaration->append($text);
    }
}