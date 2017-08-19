<?php
namespace MemMemov\UnitRobot\Source\Description\Parameter;

use MemMemov\UnitRobot\Source\Description\Type\Collection\ObjectArrayType;

class ObjectCollectionParameter implements Parameter
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