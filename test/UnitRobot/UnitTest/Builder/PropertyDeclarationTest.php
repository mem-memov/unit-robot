<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\UnitTest\Builder;

use MemMemov\UnitRobot\UnitTest\File\Text;
use PHPUnit\Framework\TestCase;

final class PropertyDeclarationTest extends TestCase
{
    public function testItCanAppendProperty(): void
    {
        $propertyDeclaration = new PropertyDeclaration();

        $text = $this->createMock(Text::class);

        $text->expects($this->once())
            ->method('appendLine');

        $propertyDeclaration->appendProperty($text);
    }

    public function testItCanAppendValue(): void
    {
        $propertyDeclaration = new PropertyDeclaration();

        $text = $this->createMock(Text::class);

        $this->mockDeclaration->expects($this->once())
            ->method('append');

        $propertyDeclaration->appendValue($text);
    }

    public function testItCanGetParameter(): void
    {
        $propertyDeclaration = new PropertyDeclaration();

        $propertyDeclaration->getParameter();
    }
}