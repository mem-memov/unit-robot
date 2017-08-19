<?php
namespace MemMemov\UnitRobot\Source\Description\Parameter;

use MemMemov\UnitRobot\Source\Description\Type\ObjectType;

class ObjectParameter implements Parameter
{
    private $name;
    private $type;
    
    public function __construct(
        string $name,
        ObjectType $type
    ) {
        $this->name = $name;
        $this->type = $type;
    }
}