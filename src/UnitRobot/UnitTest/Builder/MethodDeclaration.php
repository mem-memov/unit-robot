<?php
namespace MemMemov\UnitRobot\UnitTest\Builder;

use MemMemov\UnitRobot\UnitTest\File\Text;

class MethodDeclaration
{
    private $methodName;
    
    public function __construct(string $methodName)
    {
        $this->methodName = $methodName;
    }
    
    public function append(Text $text) 
    {
        $text->appendLine('public function ' . $this->methodName . '(): void', 1);
        $text->appendLine('{', 1);
    }
}