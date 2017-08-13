<?php
namespace MemMemov\UnitRobot\UnitTest\Builder;

use MemMemov\UnitRobot\UnitTest\File\Text;

class ParameterDeclarations
{
    private $declarations;
    
    public function __construct()
    {
        $this->declarations = [];
    }
    
    public function addDeclaration(ParameterDeclaration $declaration): void
    {
        $this->declarations[] = $declaration;
    }
    
    public function getParameters(): string
    {
        $parameters = [];
        
        foreach ($this->declarations as $declaration) {
            $parameters[] = $declaration->getParameter();
        }
        
        return implode(', ', $parameters);
    }
    
    public function append(Text $text) 
    {
        foreach ($this->declarations as $declaration) {
            $declaration->appendValue($text);
        }
    }
}