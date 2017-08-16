<?php
namespace MemMemov\UnitRobot\Source\Reflection\Method\Call\Variable;

class PropertyVariable implements Variable
{
    private $variableName;
    
    public function __construct(
        $variableName
    ) {
        $this->variableName = $variableName;
    }
    
    public function toString(): string
    {
        return '$this->' . $this->variableName;
    }
}