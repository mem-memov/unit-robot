<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\UnitTest\Builder;

use MemMemov\UnitRobot\UnitTest\File\Text;
use PHPUnit\Framework\TestCase;

final class InvocationDeclarationTest extends TestCase
{
    public function testItCanAppend(): void
    {
        $invocationDeclaration = new InvocationDeclaration();

        $text = $this->createMock(Text::class);

        $text->expects($this->once())
            ->method('appendLine');

        $invocationDeclaration->append($text);
    }
}