<?php
namespace MemMemov\UnitRobot\UnitTest;

use MemMemov\UnitRobot\Declarations;
use MemMemov\UnitRobot\Builder;

class UnitTest
{
    private $declarations;
    private $builder;
    
    public function __construct(
        Declarations $declarations,
        Builder $builder
    ) {
        $this->declarations = $declarations;
        $this->builder = $builder;
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
        
        $this->builder->setNamespaceDeclaration($classDeclaration);
    }
}