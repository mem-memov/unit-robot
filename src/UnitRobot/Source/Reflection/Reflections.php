<?php
namespace MemMemov\UnitRobot\Source\Reflection;

use MemMemov\UnitRobot\UnitTest\UnitTests;

class Reflections
{
    private $methods;
    private $unitTests;
    
    public function __construct(
        Methods $methods,
        UnitTests $unitTests
    ) {
        $this->methods = $methods;
        $this->unitTests = $unitTests;
    }
    
    public function createReflection(string $className): Reflection
    {
        return new Reflection(
            new \ReflectionClass($className),
            $this->methods,
            $this->unitTests
        );
    }
}