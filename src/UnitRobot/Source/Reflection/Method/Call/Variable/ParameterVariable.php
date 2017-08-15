<?php
namespace MemMemov\UnitRobot\Source\Reflection\Method\Call\Variable;

class ParameterVariable implements Variable
{
    private $variableName;
    
    public function __construct(
        $variableName
    ) {
        $this->variableName = $variableName;
    }
}