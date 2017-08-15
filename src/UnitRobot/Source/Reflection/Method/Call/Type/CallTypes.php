<?php
namespace MemMemov\UnitRobot\Source\Reflection\Method\Call;

use MemMemov\UnitRobot\Source\Reflection\Method\Call\Variable\Variable\Type;

class CallTypes
{
    public function createSimpleCall(
        Variable $callVariable,
        string $method
    ): SimpleCall
    {
        return new SimpleCall($callVariable, $method);
    }
    
    public function createReturnCall(
        Variable $callVariable,
        string $method
    ): ReturnCall
    {
        return new ReturnCall($callVariable, $method);
    }
    
    public function createResultCall(
        Variable $callVariable,
        string $method,
        Variable $resultVariable
    ): ResulCall
    {
        return new ResulCall($callVariable, $method, $resultVariable);
    }
}