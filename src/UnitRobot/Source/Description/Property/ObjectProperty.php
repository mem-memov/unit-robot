<?php
namespace MemMemov\UnitRobot\Source\Description\Property;

use MemMemov\UnitRobot\Source\Description\Type\ObjectType;

class ObjectProperty implements Property
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