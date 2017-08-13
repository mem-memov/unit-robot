<?php
namespace MemMemov\UnitRobot\UnitTest;

use MemMemov\UnitRobot\UnitTest\Builder\Declarations;
use MemMemov\UnitRobot\UnitTest\Builder\Builder;
use MemMemov\UnitRobot\UnitTest\File\File;
use MemMemov\UnitRobot\UnitTest\File\Text;

class UnitTest
{
    private $declarations;
    private $builder;
    private $text;
    private $file;
    
    public function __construct(
        Declarations $declarations,
        Builder $builder,
        Text $text,
        File $file
    ) {
        $this->declarations = $declarations;
        $this->builder = $builder;
        $this->text = $text;
        $this->file = $file;
    }
    
    public function setNamespace(
        string $sourceClassNamespace
    ): void
    {
        $namespaceDeclaration = $this->declarations->createNamespaceDeclaration(
            $sourceClassNamespace
        );
        
        $this->builder->setNamespaceDeclaration($namespaceDeclaration);
    }
    
    public function setClassName(
        string $sourceClassName
    ): void
    {
        $classDeclaration = $this->declarations->createClassDeclaration(
            $sourceClassName
        );

        $this->builder->setСlassDeclaration($classDeclaration);
        
        $constructDeclaration = $this->declarations->createConstructDeclaration(
            $sourceClassName
        );
        
        $this->builder->setConstructDeclaration($constructDeclaration);
    }
    
    public function addDependency(
        string $sourceUseStatement
    ): void
    {
        $dependencyDeclaration = $this->declarations->createDependencyDeclaration(
            $sourceUseStatement
        );
        
        $this->builder->addDependencyDeclaration($dependencyDeclaration);
    }
    
    public function addProperty(
        string $sourceType,
        string $sourceName
    ): void
    {
        $propertyDeclaration = $this->declarations->createPropertyDeclaration(
            $sourceType,
            $sourceName
        );
        
        $this->builder->addPropertyDeclaration($propertyDeclaration);
    }
    
    public function addMethod(
        string $sourceMethodName,
        string $sourceClassName,
        MethodParameters $sourceMethodParameters
    ): void
    {
        $methodDeclaration = $this->declarations->createMethodDeclaration(
            $sourceMethodName
        );
        
        $parameterDeclarations = $this->declarations->createParameterDeclarations();
        $sourceMethodParameters->fillUnitTestMethod(
            $this->declarations,
            $parameterDeclarations
        );
        
        $invocationDeclaration = $this->declarations->createInvocationDeclaration(
            $sourceClassName,
            $sourceMethodName,
            $parameterDeclarations->getParameters()
        );
        
        $this->builder->addMethodDeclaration(
            $methodDeclaration,
            $invocationDeclaration,
            $parameterDeclarations
        );
    }
    
    public function write(): void
    {
        $this->builder->write($this->text);

        $this->text->writeToFile($this->file);
    }
}