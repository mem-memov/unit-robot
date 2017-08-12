<?php
namespace MemMemov\UnitRobot\UnitTest\Builder;

use MemMemov\UnitRobot\UnitTest\File\Text;

class PropertyDeclaration
{
    private $type;
    private $name;
    
    public function __construct(
        string $type,
        string $name
    ) {
        $this->type = $type;
        $this->name = $name;
    }
    
    public function appendProperty(Text $text) 
    {
        $text->appendLine('protected ' . $this->name . ';', 1);
    }
}