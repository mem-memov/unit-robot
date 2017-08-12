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
    private $propertyDeclarations;
    
    public function __construct(
        PhpDeclaration $phpDeclaration,
        DependencyDeclarations $dependencyDeclarations,
        MethodDeclarations $methodDeclarations,
        PropertyDeclarations $propertyDeclarations
    ) {
        $this->phpDeclaration = $phpDeclaration;
        $this->namespaceDeclaration = null;
        $this->dependencyDeclarations = $dependencyDeclarations;
        $this->classDeclaration = null;
        $this->methodDeclarations = $methodDeclarations;
        $this->propertyDeclarations = $propertyDeclarations;
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
        $this->dependencyDeclarations->addDeclaration($dependencyDeclaration);
    }
    
    public function addPropertyDeclaration(
        PropertyDeclaration $propertyDeclaration
    ): void
    {
        $this->propertyDeclarations->addDeclaration($propertyDeclaration);
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

        $this->dependencyDeclarations->append($text);
        
        $this->classDeclaration->append($text);
        
        $this->propertyDeclarations->append($text);
        
        $this->methodDeclarations->append($text);
        
        $text->appendLine('}'); // close class
    }
}
