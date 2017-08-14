<?php
namespace MemMemov\UnitRobot\Source\Reflection;

use MemMemov\UnitRobot\Source\Reflection\Method\Methods;
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
        $class = new \ReflectionClass($className);
        
        return new Reflection(
            $class,
            new Dependencies($class),
            $this->methods,
            $this->unitTests
        );
    }
}