<?php
namespace MemMemov\UnitRobot\Source\Reflection\Method\Call;

class MethodCalls
{
    private $calls;
    
    public function __construct()
    {
        $this->calls = [];
    }
    
    public function addCall(MethodCall $call): void
    {
        $this->calls[] = $call;
    }
}