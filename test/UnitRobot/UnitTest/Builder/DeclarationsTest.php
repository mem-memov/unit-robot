<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\UnitTest\Builder;

use PHPUnit\Framework\TestCase;

final class DeclarationsTest extends TestCase
{
    public function testItCanCreateNamespaceDeclaration(): void
    {
        $declarations = new Declarations();

        $sourceClassNamespace = 'some $sourceClassNamespace value';

        $declarations->createNamespaceDeclaration($sourceClassNamespace);
    }

    public function testItCanCreateDependencyDeclaration(): void
    {
        $declarations = new Declarations();

        $sourceUseStatement = 'some $sourceUseStatement value';

        $declarations->createDependencyDeclaration($sourceUseStatement);
    }

    public function testItCanCreateClassDeclaration(): void
    {
        $declarations = new Declarations();

        $sourceClassShortName = 'some $sourceClassShortName value';

        $declarations->createClassDeclaration($sourceClassShortName);
    }

    public function testItCanCreateConstructDeclaration(): void
    {
        $declarations = new Declarations();

        $sourceClassShortName = 'some $sourceClassShortName value';

        $declarations->createConstructDeclaration($sourceClassShortName);
    }

    public function testItCanCreatePropertyDeclaration(): void
    {
        $declarations = new Declarations();

        $sourceType = 'some $sourceType value';
        $sourceName = 'some $sourceName value';

        $declarations->createPropertyDeclaration($sourceType, $sourceName);
    }

    public function testItCanCreateMethodDeclaration(): void
    {
        $declarations = new Declarations();

        $sourceMethodName = 'some $sourceMethodName value';

        $declarations->createMethodDeclaration($sourceMethodName);
    }

    public function testItCanCreateInvocationDeclaration(): void
    {
        $declarations = new Declarations();

        $sourceClassShortName = 'some $sourceClassShortName value';
        $sourceMethodName = 'some $sourceMethodName value';
        $sourceParameterNames = 'some $sourceParameterNames value';

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

        $sourceType = 'some $sourceType value';
        $sourceName = 'some $sourceName value';

        $declarations->createParameterDeclaration($sourceType, $sourceName);
    }
}