<?php
namespace MemMemov\UnitRobot\UnitTest\Builder;

use MemMemov\UnitRobot\UnitTest\File\Text;

class Builder
{
    private $phpDeclaration;
    private $namespaceDeclaration;
    private $dependencyDeclarations;
    private $classDeclaration;
    private $methodDeclarations;
    
    public function __construct(
        PhpDeclaration $phpDeclaration,
        MethodDeclarations $methodDeclarations
    ) {
        $this->phpDeclaration = $phpDeclaration;
        $this->namespaceDeclaration = null;
        $this->dependencyDeclarations = [];
        $this->classDeclaration = null;
        $this->methodDeclarations = $methodDeclarations;
    }
    
    public function setNamespaceDeclaration(
        NamespaceDeclaration $namespaceDeclaration
    ): void
    {
        $this->namespaceDeclaration = $namespaceDeclaration;
    }
    
    public function setСlassDeclaration(
        ClassDeclaration $classDeclaration
    ): void
    {
        $this->classDeclaration = $classDeclaration;
    }
    
    public function addDependencyDeclaration(
        DependencyDeclaration $dependencyDeclaration
    ): void
    {
        $this->dependencyDeclarations[] = $dependencyDeclaration;
    }
    
    public function addMethodDeclaration(
        MethodDeclaration $methodDeclaration
    ): void
    {
        $this->methodDeclarations->addDeclaration($methodDeclaration);
    }
    
    public function write(Text $text): void
    {
        $this->phpDeclaration->append($text);
        $this->namespaceDeclaration->append($text);
        
        foreach ($this->dependencyDeclarations as $dependencyDeclaration) {
            $dependencyDeclaration->append($text);
        }
        
        if (!empty($this->dependencyDeclarations)) {
            $text->appendLine('');
        }
        
        $this->classDeclaration->append($text);
        
        $this->methodDeclarations->append($text);
        
        $text->appendLine('}'); // close class
    }
}
