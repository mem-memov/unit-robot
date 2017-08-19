<?php
namespace MemMemov\UnitRobot\Source\Description\Type\Collection;

use MemMemov\UnitRobot\Source\Description\Type\ObjectType;

class ObjectArrayType implements ArrayType
{
    private $itemType;
    
    public function __construct(
        ObjectType $itemType
    ) {
        $this->itemType = $itemType;
    }
}