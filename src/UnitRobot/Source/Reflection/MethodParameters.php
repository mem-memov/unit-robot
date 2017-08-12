<?php
namespace MemMemov\UnitRobot\Source\Reflection;

class MethodParameters
{
    private $parameters;
    
    public function __construct(
        array $parameters
    ) {
        $this->parameters = $parameters;
    }
}