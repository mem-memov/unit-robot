<?php
namespace MemMemov\UnitRobot\UnitTest\Builder;

use MemMemov\UnitRobot\UnitTest\File\Text;

class ConstructDeclaration
{
    private $className;
    private $parameters;
    
    public function __construct(
        string $className
    ) {
        $this->className = $className;
        $this->parameters = null;
    }
    
    public function setParameters(string $parameters): void
    {
        $this->parameters = $parameters;
    }
    
    public function append(Text $text) 
    {
        $text->appendLine(
            '$' . lcfirst($this->className) 
            . ' = new ' . $this->className . '(' 
            . $this->parameters
            . ');'
        , 2);
    }
}