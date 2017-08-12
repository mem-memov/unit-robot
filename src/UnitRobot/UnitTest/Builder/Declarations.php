<?php
namespace MemMemov\UnitRobot\UnitTest\Builder;

class Declarations
{
    public function createNamespaceDeclaration(
        string $sourceClassNamespace
    ): NamespaceDeclaration
    {
        return new NamespaceDeclaration($sourceClassNamespace);
    }
    
    public function createDependencyDeclaration(
        string $sourceUseStatement
    ): DependencyDeclaration
    {
        return new DependencyDeclaration($sourceUseStatement);
    }
    
    public function createClassDeclaration(
        string $sourceClassShortName
    ): ClassDeclaration
    {
        return new ClassDeclaration($sourceClassShortName . 'Test');
    }
    
    public function createPropertyDeclaration(
        string $sourceType,
        string $sourceName
    ): PropertyDeclaration
    {
        return new PropertyDeclaration($sourceType, $sourceName);
    }
    
    public function createMethodDeclaration(
        string $sourceMethodName
    ): MethodDeclaration
    {
        return new MethodDeclaration('testItCan' . ucfirst($sourceMethodName));
    }
}