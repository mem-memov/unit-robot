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
    }

    public function testItCanAppend(): void
    {
        $dependencyDeclarations = new DependencyDeclarations();
    }
}