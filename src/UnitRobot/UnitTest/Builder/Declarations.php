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
    
    public function createClassDeclaration(
        string $sourceClassShortName
    ): ClassDeclaration
    {
        return new ClassDeclaration($sourceClassShortName . 'Test');
    }
    
    public function createMethodDeclaration(
        string $sourceMethodName
    ): MethodDeclaration
    {
        return new MethodDeclaration('testItCan' . ucfirst($sourceMethodName));
    }
}