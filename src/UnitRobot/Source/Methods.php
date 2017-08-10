<?php
namespace MemMemov\UnitRobot\Source;

class Methods
{
    public function createMethod(
        \ReflectionMethod $methodReflection
    ): Method
    {
        return new Method($methodReflection);
    }
}