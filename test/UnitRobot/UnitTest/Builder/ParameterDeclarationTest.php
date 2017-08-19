<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\UnitTest\Builder;

use MemMemov\UnitRobot\UnitTest\File\Text;
use PHPUnit\Framework\TestCase;

final class ParameterDeclarationTest extends TestCase
{
    public function testItCanGetParameter(): void
    {
        $parameterDeclaration = new ParameterDeclaration();

        $parameterDeclaration->getParameter();
    }

    public function testItCanAppendValue(): void
    {
        $parameterDeclaration = new ParameterDeclaration();

        $text = $this->createMock(Text::class);

        $this->mockDeclaration->expects($this->once())
            ->method('append');

        $parameterDeclaration->appendValue($text);
    }
}