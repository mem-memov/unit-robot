<?php
namespace MemMemov\UnitRobot\Source\Description\Parameter;

use MemMemov\UnitRobot\Source\Description\Type\Collection\MixedArrayType;

class ArrayParameter implements Parameter
{
    private $name;
    private $type;
    
    public function __construct(
        string $name,
        MixedArrayType $type
    ) {
        $this->name = $name;
        $this->type = $type;
    }
}