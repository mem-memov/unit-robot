<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\UnitTest\Builder;

use MemMemov\UnitRobot\UnitTest\File\Text;
use PHPUnit\Framework\TestCase;

final class NamespaceDeclarationTest extends TestCase
{
    public function testItCanAppend(): void
    {
        $namespaceDeclaration = new NamespaceDeclaration();

        $text = $this->createMock(Text::class);

        $text->expects($this->once())
            ->method('appendLine');

        $text->expects($this->once())
            ->method('appendLine');

        $namespaceDeclaration->append($text);
    }
}