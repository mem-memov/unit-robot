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
    private $callDeclarations;
    
    public function __construct(
        PhpDeclaration $phpDeclaration,
        DependencyDeclarations $dependencyDeclarations,
        MethodDeclarations $methodDeclarations,
        PropertyDeclarations $propertyDeclarations,
        CallDeclarations $callDeclarations
    ) {
        $this->phpDeclaration = $phpDeclaration;
        $this->namespaceDeclaration = null;
        $this->dependencyDeclarations = $dependencyDeclarations;
        $this->classDeclaration = null;
        $this->methodDeclarations = $methodDeclarations;
        $this->propertyDeclarations = $propertyDeclarations;
        $this->callDeclarations = $callDeclarations;
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
    
    public function setConstructDeclaration(
        ConstructDeclaration $constructDeclaration
    ): void
    {
        $this->methodDeclarations->setConstructDeclaration($constructDeclaration);
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
        MethodDeclaration $methodDeclaration,
        InvocationDeclaration $invocationDeclaration,
        ParameterDeclarations $parameterDeclarations,
        CallDeclarations $callDeclarations
    ): void
    {
        $this->methodDeclarations->addDeclaration(
            $methodDeclaration,
            $invocationDeclaration,
            $parameterDeclarations,
            $callDeclarations
        );
    }
    
    public function write(Text $text): void
    {
        $this->phpDeclaration->append($text);
        
        $this->namespaceDeclaration->append($text);

        $this->dependencyDeclarations->append($text);
        
        $this->classDeclaration->append($text);
        
        $this->propertyDeclarations->append($text);
        
        $this->callDeclarations->append($text);
        
        $constructorParameters = $this->propertyDeclarations->getParameters();

        $this->methodDeclarations->append($text, $constructorParameters);
        
        $text->appendLine('}'); // close class
    }
}
