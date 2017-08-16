<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\UnitTest\Builder;

use MemMemov\UnitRobot\UnitTest\File\Text;
use PHPUnit\Framework\TestCase;

final class PropertyDeclarationsTest extends TestCase
{
    public function testItCanAddDeclaration(): void
    {
        $propertyDeclarations = new PropertyDeclarations();

        $declaration = $this->createMock(PropertyDeclaration::class);

        $propertyDeclarations->addDeclaration($declaration);
    }

    public function testItCanAppend(): void
    {
        $propertyDeclarations = new PropertyDeclarations();

        $text = $this->createMock(Text::class);

        $declaration->expects($this->once())
            ->method('appendProperty');

        $text->expects($this->once())
            ->method('appendLine');

        $text->expects($this->once())
            ->method('appendLine');

        $text->expects($this->once())
            ->method('appendLine');

        $declaration->expects($this->once())
            ->method('appendValue');

        $text->expects($this->once())
            ->method('appendLine');

        $text->expects($this->once())
            ->method('appendLine');

        $propertyDeclarations->append($text);
    }

    public function testItCanGetParameters(): void
    {
        $propertyDeclarations = new PropertyDeclarations();

        $declaration->expects($this->once())
            ->method('getParameter');

        $propertyDeclarations->getParameters();
    }
}