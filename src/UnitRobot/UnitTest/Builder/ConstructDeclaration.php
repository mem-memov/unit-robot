<?php
namespace MemMemov\UnitRobot\UnitTest\Builder;

use MemMemov\UnitRobot\UnitTest\File\Text;

class ConstructDeclaration
{
    private $className;
    
    public function __construct(
        string $className
    ) {
        $this->className = $className;
    }
    
    public function append(Text $text) 
    {
        $text->appendLine('$' . lcfirst($this->className) . ' = new ' . $this->className . '();', 2);
    }
}