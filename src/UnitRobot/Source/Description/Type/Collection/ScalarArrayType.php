<?php
namespace MemMemov\UnitRobot\Source\Description\Type\Collection;

use MemMemov\UnitRobot\Source\Description\Type\Scalar\ScalarType;

class ScalarArrayType implements ArrayType
{
    private $itemType;
    
    public function __construct(
        ScalarType $itemType
    ) {
        $this->itemType = $itemType;
    }
}