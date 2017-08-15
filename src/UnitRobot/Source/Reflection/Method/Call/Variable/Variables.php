<?php
namespace MemMemov\UnitRobot\Source\Reflection\Method\Call\Variable;

class Variables
{
    public function createPropertyVariable(
        string $variableName
    ): PropertyVariable
    {
        return new PropertyVariable($variableName);
    }
    
    public function createParameterVariable(
        string $variableName
    ): ParameterVariable
    {
        return new ParameterVariable($variableName);
    }
}