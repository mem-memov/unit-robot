<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\UnitTest\Builder;

use PHPUnit\Framework\TestCase;

final class DeclarationsTest extends TestCase
{
    public function testItCanCreateNamespaceDeclaration(): void
    {
        $declarations = new Declarations();

        $declarations->createNamespaceDeclaration();
    }

    public function testItCanCreateDependencyDeclaration(): void
    {
        $declarations = new Declarations();

        $declarations->createDependencyDeclaration();
    }

    public function testItCanCreateClassDeclaration(): void
    {
        $declarations = new Declarations();

        $declarations->createClassDeclaration();
    }

    public function testItCanCreateConstructDeclaration(): void
    {
        $declarations = new Declarations();

        $declarations->createConstructDeclaration();
    }

    public function testItCanCreatePropertyDeclaration(): void
    {
        $declarations = new Declarations();

        $declarations->createPropertyDeclaration();
    }

    public function testItCanCreateMethodDeclaration(): void
    {
        $declarations = new Declarations();

        $declarations->createMethodDeclaration();
    }

    public function testItCanCreateInvocationDeclaration(): void
    {
        $declarations = new Declarations();

        $declarations->createInvocationDeclaration();
    }
}