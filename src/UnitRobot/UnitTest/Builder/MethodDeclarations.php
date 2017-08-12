<?php
namespace MemMemov\UnitRobot\UnitTest\Builder;

use MemMemov\UnitRobot\UnitTest\File\Text;

class MethodDeclarations
{
    private $declarations;
    
    public function __construct()
    {
        $this->declarations = [];
    }
    
    public function addDeclaration(MethodDeclaration $declaration): void
    {
        $this->declarations[] = $declaration;
    }
    
    public function append(Text $text) 
    {
        foreach ($this->declarations as $index => $declaration) {
            if (0 !== $index) {
                $text->appendLine(''); // space
            }
            $declaration->append($text);
            $text->appendLine('}', 1); // close method
        }
    }
}