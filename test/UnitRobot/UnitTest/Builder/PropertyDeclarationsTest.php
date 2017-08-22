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

    public function testItCanGetParameters(): void
    {
        $propertyDeclarations = new PropertyDeclarations();

        $propertyDeclarations->getParameters();
    }
}