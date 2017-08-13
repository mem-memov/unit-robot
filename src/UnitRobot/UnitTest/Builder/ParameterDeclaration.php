<?php
namespace MemMemov\UnitRobot\UnitTest\Builder;

use MemMemov\UnitRobot\UnitTest\File\Text;

class ParameterDeclaration
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
    
    public function getParameter(): string
    {
        return '$' . $this->name;
    }
}