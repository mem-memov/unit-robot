<?php
namespace MemMemov\UnitRobot\Source\Description\Property;

use MemMemov\UnitRobot\Source\Description\Type\Collection\ObjectArrayType;

class ObjectCollectionProperty implements Property
{
    private $name;
    private $type;
    
    public function __construct(
        string $name,
        ObjectArrayType $type
    ) {
        $this->name = $name;
        $this->type = $type;
    }
}