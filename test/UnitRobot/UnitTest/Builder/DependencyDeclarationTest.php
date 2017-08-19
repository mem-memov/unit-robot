<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\UnitTest\Builder;

use MemMemov\UnitRobot\UnitTest\File\Text;
use PHPUnit\Framework\TestCase;

final class DependencyDeclarationTest extends TestCase
{
    public function testItCanAppend(): void
    {
        $dependencyDeclaration = new DependencyDeclaration();

        $text = $this->createMock(Text::class);

        $text->expects($this->once())
            ->method('appendLine');

        $dependencyDeclaration->append($text);
    }
}