<?php
namespace MemMemov\UnitRobot\UnitTest\Builder;

use MemMemov\UnitRobot\UnitTest\File\Text;

class DependencyDeclarations
{
    private $declarations;
    
    public function __construct()
    {
        $this->declarations = [];
    }
    
    public function addDeclaration(DependencyDeclaration $declaration): void
    {
        $this->declarations[] = $declaration;
    }
    
    public function append(Text $text) 
    {
        foreach ($this->declarations as $index => $declaration) {
            $declaration->append($text);
        }
        
        $text->appendLine('use PHPUnit\Framework\TestCase;');
        $text->appendLine('');
    }
}