<?php
namespace MemMemov\UnitRobot\UnitTest\Builder;

use MemMemov\UnitRobot\UnitTest\File\Text;

class PropertyDeclarations
{
    private $declarations;
    
    public function __construct()
    {
        $this->declarations = [];
    }
    
    public function addDeclaration(PropertyDeclaration $declaration): void
    {
        $this->declarations[] = $declaration;
    }
    
    public function append(Text $text) 
    {
        if (empty($this->declarations)) {
            return;
        }
        
        foreach ($this->declarations as $declaration) {
            $declaration->appendProperty($text);
        }
        
        $text->appendLine('');
        $text->appendLine('protected function setUp(): void', 1);
        $text->appendLine('{', 1);
        
        foreach ($this->declarations as $declaration) {
            $declaration->appendValue($text);
        }
        
        $text->appendLine('}', 1);
        $text->appendLine('');
    }
}