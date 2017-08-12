<?php
namespace MemMemov\UnitRobot\UnitTest\Builder;

use MemMemov\UnitRobot\UnitTest\File\Text;

class DependencyDeclaration
{
    private $useStatement;
    
    public function __construct(
        string $useStatement
    ) {
        $this->useStatement = $useStatement;
    }
    
    public function append(Text $text) 
    {
        $text->appendLine($this->useStatement);
    }
}