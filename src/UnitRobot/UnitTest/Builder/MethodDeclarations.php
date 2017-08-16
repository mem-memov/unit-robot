<?php
namespace MemMemov\UnitRobot\UnitTest\Builder;

use MemMemov\UnitRobot\UnitTest\File\Text;

class MethodDeclarations
{
    private $propertyDeclarations;
    private $methodDeclarations;
    private $invocationDeclarations;
    private $parameterDeclarations;
    private $callDeclarations;
    private $constructDeclaration;
    
    public function __construct(
        PropertyDeclarations $propertyDeclarations
    )
    {
        $this->propertyDeclarations = $propertyDeclarations;
        $this->methodDeclarations = [];
        $this->invocationDeclarations = [];
        $this->parameterDeclarations = [];
        $this->callDeclarations = [];
        $this->constructDeclaration = null;
    }
    
    public function addDeclaration(
        MethodDeclaration $methodDeclaration,
        InvocationDeclaration $invocationDeclaration,
        ParameterDeclarations $parameterDeclarations,
        CallDeclarations $callDeclarations
    ): void
    {
        $this->methodDeclarations[] = $methodDeclaration;
        $this->invocationDeclarations[] = $invocationDeclaration;
        $this->parameterDeclarations[] = $parameterDeclarations;
        $this->callDeclarations[] = $callDeclarations;
    }
    
    public function setConstructDeclaration(
        ConstructDeclaration $constructDeclaration
    ): void
    {
        $this->constructDeclaration = $constructDeclaration;
    }
    
    public function append(Text $text) 
    {
        $constructorParameters = $this->propertyDeclarations->getParameters();
        $this->constructDeclaration->setParameters($constructorParameters);
        
        foreach ($this->methodDeclarations as $index => $methodDeclaration) {
            if (0 !== $index) {
                $text->appendLine(''); // space
            }
            
            $methodDeclaration->append($text);
            $this->constructDeclaration->append($text);
            $text->appendLine(''); // space
            
            $parameterDeclarations = $this->parameterDeclarations[$index];
            $parameterDeclarations->append($text);
            
            $callDeclarations = $this->callDeclarations[$index];
            $callDeclarations->append($text);
            
            $invocationDeclaration = $this->invocationDeclarations[$index];
            $invocationDeclaration->append($text);
            $text->appendLine('}', 1); // close method
        }
    }
}