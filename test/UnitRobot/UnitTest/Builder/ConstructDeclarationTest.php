<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\UnitTest\Builder;

use MemMemov\UnitRobot\UnitTest\File\Text;
use PHPUnit\Framework\TestCase;

final class ConstructDeclarationTest extends TestCase
{
    public function testItCanSetParameters(): void
    {
        $constructDeclaration = new ConstructDeclaration();

        $parameters = 'some $parameters value';

        $constructDeclaration->setParameters($parameters);
    }

    public function testItCanAppend(): void
    {
        $constructDeclaration = new ConstructDeclaration();

        $text = $this->createMock(Text::class);

        $text->expects($this->once())
            ->method('appendLine');

        $constructDeclaration->append($text);
    }
}