<?php
namespace MemMemov\UnitRobot\Source\Reflection;

class Reflections
{
    private $methods;
    
    public function __construct(
        Methods $methods
    ) {
        $this->methods = $methods;
    }
    
    public function createReflection(string $className): Reflection
    {
        return new Reflection(
            new \ReflectionClass($className),
            $this->methods
        );
    }
}