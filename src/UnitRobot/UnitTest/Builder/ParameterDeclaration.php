<?php
namespace MemMemov\UnitRobot\UnitTest\Builder;

use MemMemov\UnitRobot\UnitTest\File\Text;

class ParameterDeclaration
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
    
    public function getParameter(): string
    {
        return '$' . $this->name;
    }
    
    public function appendValue(Text $text): void
    {
        $this->mockDeclaration->append($text);
    }
}