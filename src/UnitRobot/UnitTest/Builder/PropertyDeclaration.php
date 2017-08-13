<?php
namespace MemMemov\UnitRobot\UnitTest\Builder;

use MemMemov\UnitRobot\UnitTest\File\Text;

class PropertyDeclaration
{
    private $type;
    private $name;
    private $mockDeclaration;
    
    public function __construct(
        string $type,
        string $name,
        MockDeclaration $mockDeclaration
    ) {
        $this->type = $type;
        $this->name = $name;
        $this->mockDeclaration = $mockDeclaration;
    }
    
    public function appendProperty(Text $text): void
    {
        $text->appendLine('protected $' . $this->name . ';', 1);
    }
    
    public function appendValue(Text $text): void
    {
        $this->mockDeclaration->append($text);
    }
    
    public function getParameter(): string
    {
        return '$this->' . $this->name;
    }
}