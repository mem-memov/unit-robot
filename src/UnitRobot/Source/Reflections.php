<?php
namespace MemMemov\UnitRobot\Source;

class Reflections
{
    public function createReflection(string $className): Reflection
    {
        return new Reflection(
            new \ReflectionClass($className)
        );
    }
}