<?php
namespace MemMemov\UnitRobot\Source\Reflection;

use MemMemov\UnitRobot\Source\Reflection\Constructor\ClassConstructors;
use MemMemov\UnitRobot\Source\Reflection\Method\Methods;
use MemMemov\UnitRobot\Source\Description\Dependency\Dependencies as DescriptionDependencies;
use MemMemov\UnitRobot\Source\Description\Instance\Instancies;

class Reflections
{
    private $methods;
    private $descriptionDependencies;
    private $constructors;
    private $instances;
    
    public function __construct(
        Methods $methods,
        DescriptionDependencies $descriptionDependencies,
        ClassConstructors $constructors,
        Instancies $instances
    ) {
        $this->methods = $methods;
        $this->descriptionDependencies = $descriptionDependencies;
        $this->constructors = $constructors;
        $this->instances = $instances;
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
            $this->constructors,
            $this->instances
        );
    }
}