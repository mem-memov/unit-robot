<?php
namespace MemMemov\UnitRobot\Source\Reflection\Method\Call\Type;

use MemMemov\UnitRobot\Source\Reflection\Method\Call\Variable\Variable;

class SimpleCall implements Call
{
    private $callVariable;
    private $method;
    
    public function __create(
        Variable $callVariable,
        string $method
    ): SimpleCall
    {
        $this->callVariable = $callVariable;
        $this->method = $method;
    }
}