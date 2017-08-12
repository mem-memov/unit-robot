<?php
namespace MemMemov\UnitRobot\UnitTest\Builder;

use MemMemov\UnitRobot\UnitTest\File\Text;

class ClassDeclaration
{
    private $className;
    
    public function __construct(string $className)
    {
        $this->className = $className;
    }
    
    public function append(Text $text) 
    {
        $text->appendLine('final class ' . $this->className . ' extends TestCase');
        $text->appendLine('{');
    }
}