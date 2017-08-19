<?php
namespace MemMemov\UnitRobot\Source\Description\Property;

use MemMemov\UnitRobot\Source\Description\Type\Collection\ScalarArrayType;

class ScalarCollectionProperty implements Property
{
    private $name;
    private $type;
    
    public function __construct(
        string $name,
        ScalarArrayType $type
    ) {
        $this->name = $name;
        $this->type = $type;
    }
}