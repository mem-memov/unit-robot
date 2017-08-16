<?php
namespace MemMemov\UnitRobot\Source\Reflection\Method\Call;

use MemMemov\UnitRobot\Source\Reflection\Method\Call\Type\Call;

class MethodCalls
{
    private $calls;
    
    public function __construct()
    {
        $this->calls = [];
    }
    
    public function addCall(Call $call): void
    {
        $this->calls[] = $call;
    }
}