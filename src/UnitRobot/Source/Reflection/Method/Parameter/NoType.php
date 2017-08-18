<?php
namespace MemMemov\UnitRobot\Source\Reflection\Method\Parameter;

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
            . $declaringClas->getName()
            . '::'
            . $declaringFunction->getName()
        );
    }
}