<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\UnitTest\Builder;

use MemMemov\UnitRobot\UnitTest\File\Text;
use PHPUnit\Framework\TestCase;

final class CallDeclarationsTest extends TestCase
{
    public function testItCanAddDeclaration(): void
    {
        $callDeclarations = new CallDeclarations();

        $declaration = $this->createMock(CallDeclaration::class);

        $callDeclarations->addDeclaration($declaration);
    }
}