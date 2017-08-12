<?php
namespace MemMemov\UnitRobot\Source\Reflection;

class Parameter
{
    private $reflection;
    
    public function __construct(
        \ReflectionParameter $reflection
    ) {
        $this->reflection = $reflection;
    }
}