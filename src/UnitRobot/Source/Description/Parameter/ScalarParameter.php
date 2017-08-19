<?php
namespace MemMemov\UnitRobot\Source\Description\Parameter;

use MemMemov\UnitRobot\Source\Description\Type\Scalar\ScalarType;

class ScalarParameter implements Parameter
{
    private $name;
    private $type;
    
    public function __construct(
        string $name,
        ScalarType $type
    ) {
        $this->name = $name;
        $this->type = $type;
    }
}