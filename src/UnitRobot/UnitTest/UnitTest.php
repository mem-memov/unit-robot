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
    }
    
    public function addMethod(string $sourceMethodName): void
    {
        $methodDeclaration = $this->declarations->createMethodDeclaration(
            $sourceMethodName
        );
        
        $this->builder->addMethodDeclaration($methodDeclaration);
    }
    
    public function write(): void
    {
        $this->builder->write($this->text);

        $this->text->writeToFile($this->file);
    }
}