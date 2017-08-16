<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\UnitTest\Builder;

use MemMemov\UnitRobot\UnitTest\File\Text;
use PHPUnit\Framework\TestCase;

final class DependencyDeclarationsTest extends TestCase
{
    public function testItCanAddDeclaration(): void
    {
        $dependencyDeclarations = new DependencyDeclarations();

        $declaration = $this->createMock(DependencyDeclaration::class);

        $dependencyDeclarations->addDeclaration($declaration);
    }

    public function testItCanAppend(): void
    {
        $dependencyDeclarations = new DependencyDeclarations();

        $text = $this->createMock(Text::class);

        $declaration->expects($this->once())
            ->method('append');

        $text->expects($this->once())
            ->method('appendLine');

        $text->expects($this->once())
            ->method('appendLine');

        $dependencyDeclarations->append($text);
    }
}