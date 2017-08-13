<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\UnitTest\Builder;

use MemMemov\UnitRobot\UnitTest\File\Text;
use PHPUnit\Framework\TestCase;

final class MethodDeclarationsTest extends TestCase
{
    public function testItCanAddDeclaration(): void
    {
        $methodDeclarations = new MethodDeclarations();
    }

    public function testItCanSetConstructDeclaration(): void
    {
        $methodDeclarations = new MethodDeclarations();
    }

    public function testItCanAppend(): void
    {
        $methodDeclarations = new MethodDeclarations();
    }
}