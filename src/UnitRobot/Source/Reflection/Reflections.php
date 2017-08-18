<?php
namespace MemMemov\UnitRobot\Source\Reflection;

use MemMemov\UnitRobot\Source\Reflection\Method\Methods;
use MemMemov\UnitRobot\UnitTest\UnitTests;
use MemMemov\UnitRobot\Source\Description\Dependencies as DescriptionDependencies;

class Reflections
{
    private $methods;
    private $unitTests;
    private $descriptionDependencies;
    
    public function __construct(
        Methods $methods,
        UnitTests $unitTests,
        DescriptionDependencies $descriptionDependencies
    ) {
        $this->methods = $methods;
        $this->unitTests = $unitTests;
        $this->descriptionDependencies = $descriptionDependencies;
    }
    
    public function createReflection(string $className): Reflection
    {
        $class = new \ReflectionClass($className);
        
        return new Reflection(
            $class,
            new Dependencies(
                $class,
                $this->descriptionDependencies
            ),
            $this->methods,
            $this->unitTests
        );
    }
}