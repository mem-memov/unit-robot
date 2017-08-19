<?php
namespace MemMemov\UnitRobot\Source\Reflection\Parameter;

class NoType extends \Exception
{
    public function __construct(
        string $parameterName,
        \ReflectionClass $declaringClass,
        \ReflectionFunctionAbstract $declaringFunction
    ) {
        parent::__construct(
            'No type for ' 
            . $parameterName 
            . ' in ' 
            . $declaringClass->getName()
            . '::'
            . $declaringFunction->getName()
        );
    }
}