<?php
namespace MemMemov\UnitRobot\Source\Reflection\Method\Constructor;

use MemMemov\UnitRobot\Source\Reflection\Method\Parameter\Parameters;

class EmptyConstructor implements Constructor
{
    private $className;
    private $parameters;
    
    public function __construct(
        string $className,
        Parameters $parameters
    ) {
        $this->className = $className;
        $this->parameters = $parameters;
    }
}