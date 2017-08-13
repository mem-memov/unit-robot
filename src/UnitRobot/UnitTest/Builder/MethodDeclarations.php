<?php
namespace MemMemov\UnitRobot\UnitTest\Builder;

use MemMemov\UnitRobot\UnitTest\File\Text;

class MethodDeclarations
{
    private $declarations;
    private $constructDeclaration;
    
    public function __construct()
    {
        $this->declarations = [];
        $this->constructDeclaration = null;
    }
    
    public function addDeclaration(MethodDeclaration $declaration): void
    {
        $this->declarations[] = $declaration;
    }
    
    public function setConstructDeclaration(
        ConstructDeclaration $constructDeclaration
    ): void
    {
        $this->constructDeclaration = $constructDeclaration;
    }
    
    public function append(Text $text) 
    {
        foreach ($this->declarations as $index => $methodDeclaration) {
            if (0 !== $index) {
                $text->appendLine(''); // space
            }
            $methodDeclaration->append($text);
            $this->constructDeclaration->append($text);
            $text->appendLine('}', 1); // close method
        }
    }
}