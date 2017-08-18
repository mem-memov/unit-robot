<?php
namespace MemMemov\UnitRobot\Source\Description;

class Method
{
    private $name;
    private $parameters;
    private $retunValue;
    
    public function __construct(
        string $name,
        MethodParameters $parameters,
        Variable $retunValue
    ) {
        $this->name = $name;
        $this->parameters = $parameters;
        $this->retunValue = $retunValue;
    }
    
}