<?php
namespace MemMemov\UnitRobot\UnitTest\Builder;

use MemMemov\UnitRobot\UnitTest\File\Text;

class CallDeclarations
{
    public function __construct()
    {
        $this->declarations = [];
    }
    
    public function addDeclaration(CallDeclaration $declaration): void
    {
        $this->declarations[] = $declaration;
    }
    
    public function append(Text $text) 
    {
        foreach ($this->declarations as $declaration) {
            $declaration->appendExpectation($text);
        }
        
        if (!empty($this->declarations)) {
            $text->appendLine(''); // space
        }
    }
}