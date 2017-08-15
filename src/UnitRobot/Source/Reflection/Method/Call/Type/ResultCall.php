<?php
namespace MemMemov\UnitRobot\Source\Reflection\Method\Call\Type;

use MemMemov\UnitRobot\Source\Reflection\Method\Call\Variable\Variable;

class ResultCall implements Call
{
    private $callVariable;
    private $method;
    private $resultVariable;
    
    public function __create(
        Variable $callVariable,
        string $method,
        Variable $resultVariable
    ): SimpleCall
    {
        $this->callVariable = $callVariable;
        $this->method = $method;
        $this->resultVariable = $resultVariable;
    }
}