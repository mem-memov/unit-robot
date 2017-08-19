<?php
namespace MemMemov\UnitRobot\Source\Description\Parameter;

use MemMemov\UnitRobot\Source\Description\Type\Collection\ScalarArrayType;

class ScalarCollectionParameter implements Parameter
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