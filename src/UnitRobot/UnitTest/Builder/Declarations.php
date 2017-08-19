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
        string $fullClassName,
        string $alias
    ): DependencyDeclaration
    {
        return new DependencyDeclaration($fullClassName, $alias);
    }
    
    public function createClassDeclaration(
        string $sourceClassShortName
    ): ClassDeclaration
    {
        return new ClassDeclaration($sourceClassShortName . 'Test');
    }
    
    public function createConstructDeclaration(
        string $sourceClassShortName
    ): ConstructDeclaration
    {
        return new ConstructDeclaration($sourceClassShortName);
    }
    
    public function createPropertyDeclaration(
        string $sourceType,
        string $sourceName
    ): PropertyDeclaration
    {
        return new PropertyDeclaration(
            $sourceType, 
            $sourceName,
            new MockDeclaration(
                '$this->' . $sourceName,
                $sourceType
            )
        );
    }
    
    public function createMethodDeclaration(
        string $sourceMethodName
    ): MethodDeclaration
    {
        return new MethodDeclaration('testItCan' . ucfirst($sourceMethodName));
    }
    
    public function createInvocationDeclaration(
        string $sourceClassShortName,
        string $sourceMethodName,
        string $sourceParameterNames
    ): InvocationDeclaration
    {
        return new InvocationDeclaration(
            '$' . lcfirst($sourceClassShortName),
            $sourceMethodName,
            $sourceParameterNames
        );
    }
    
    public function createParameterDeclarations(): ParameterDeclarations
    {
        return new ParameterDeclarations();
    }
    
    public function createParameterDeclaration(
        string $sourceType,
        string $sourceName
    ): ParameterDeclaration
    {
        return new ParameterDeclaration(
            $sourceType, 
            $sourceName,
            new MockDeclaration(
                '$' . $sourceName,
                $sourceType
            )
        );
    }
    
    public function createCallDeclarations(): CallDeclarations
    {
        return new CallDeclarations();
    }
    
    public function createSimpleCallDeclaration(
        string $variable, 
        string $method
    ): SimpleCallDeclaration
    {
        return new SimpleCallDeclaration($variable, $method);
    }
    
    public function createResultCallDeclaration(
        string $callVariable,
        string $method,
        string $resultVariable,
        string $resultVariableType
    ): ResultCallDeclaration
    {
        return new ResultCallDeclaration(
            $callVariable, 
            $method, 
            $resultVariable,
            new MockDeclaration(
                $resultVariable,
                $resultVariableType
            )
        );
    }
}