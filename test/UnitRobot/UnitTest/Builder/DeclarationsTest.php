<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\UnitTest\Builder;

use PHPUnit\Framework\TestCase;

final class DeclarationsTest extends TestCase
{
    public function testItCanCreateNamespaceDeclaration(): void
    {
        $declarations = new Declarations();

        $declarations->createNamespaceDeclaration($sourceClassNamespace);
    }

    public function testItCanCreateDependencyDeclaration(): void
    {
        $declarations = new Declarations();

        $declarations->createDependencyDeclaration($sourceUseStatement);
    }

    public function testItCanCreateClassDeclaration(): void
    {
        $declarations = new Declarations();

        $declarations->createClassDeclaration($sourceClassShortName);
    }

    public function testItCanCreateConstructDeclaration(): void
    {
        $declarations = new Declarations();

        $declarations->createConstructDeclaration($sourceClassShortName);
    }

    public function testItCanCreatePropertyDeclaration(): void
    {
        $declarations = new Declarations();

        $declarations->createPropertyDeclaration($sourceType, $sourceName);
    }

    public function testItCanCreateMethodDeclaration(): void
    {
        $declarations = new Declarations();

        $declarations->createMethodDeclaration($sourceMethodName);
    }

    public function testItCanCreateInvocationDeclaration(): void
    {
        $declarations = new Declarations();

        $declarations->createInvocationDeclaration($sourceClassShortName, $sourceMethodName, $sourceParameterNames);
    }

    public function testItCanCreateParameterDeclarations(): void
    {
        $declarations = new Declarations();

        $declarations->createParameterDeclarations();
    }

    public function testItCanCreateParameterDeclaration(): void
    {
        $declarations = new Declarations();

        $declarations->createParameterDeclaration($sourceType, $sourceName);
    }
}