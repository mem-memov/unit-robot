<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\UnitTest\Builder;

use PHPUnit\Framework\TestCase;

final class DeclarationsTest extends TestCase
{
    public function testItCanCreateNamespaceDeclaration(): void
    {
        $declarations = new Declarations();
    }

    public function testItCanCreateDependencyDeclaration(): void
    {
        $declarations = new Declarations();
    }

    public function testItCanCreateClassDeclaration(): void
    {
        $declarations = new Declarations();
    }

    public function testItCanCreateConstructDeclaration(): void
    {
        $declarations = new Declarations();
    }

    public function testItCanCreatePropertyDeclaration(): void
    {
        $declarations = new Declarations();
    }

    public function testItCanCreateMethodDeclaration(): void
    {
        $declarations = new Declarations();
    }
}