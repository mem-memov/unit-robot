<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\UnitTest\Builder;

use MemMemov\UnitRobot\UnitTest\File\Text;
use PHPUnit\Framework\TestCase;

final class ParameterDeclarationsTest extends TestCase
{
    public function testItCanAddDeclaration(): void
    {
        $parameterDeclarations = new ParameterDeclarations();

        $declaration = $this->createMock(ParameterDeclaration::class);

        $parameterDeclarations->addDeclaration($declaration);
    }

    public function testItCanGetParameters(): void
    {
        $parameterDeclarations = new ParameterDeclarations();


        $parameterDeclarations->getParameters();
    }

    public function testItCanAppend(): void
    {
        $parameterDeclarations = new ParameterDeclarations();

        $text = $this->createMock(Text::class);

        $parameterDeclarations->append($text);
    }
}