<?php
namespace MemMemov\UnitRobot\Source\Reflection\Method\Constructor;

use MemMemov\UnitRobot\Source\Reflection\Method\MethodSignature;
use MemMemov\UnitRobot\Source\Reflection\Method\Parameter\Parameters;

class ParameterizedConstructor implements Constructor
{
    private $reflection;
    private $className;
    private $methodSignature;
    private $parameters;
    
    public function __construct(
        \ReflectionMethod $reflection,
        string $className,
        MethodSignature $methodSignature,
        Parameters $parameters
    ) {
        $this->reflection = $reflection;
        $this->className = $className;
        $this->methodSignature = $methodSignature;
        $this->parameters = $parameters;
    }
}