<?php
namespace MemMemov\UnitRobot\Source\Reflection\Method;

class NoType extends \Exception
{
    public function __construct(
        string $method,
        \ReflectionClass $declaringClass
    ) {
        parent::__construct(
            'No return type in ' 
            . $declaringClass->getName()
            . '::'
            . $method
        );
    }
}