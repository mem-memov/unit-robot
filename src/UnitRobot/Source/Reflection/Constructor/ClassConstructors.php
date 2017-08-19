<?php
namespace MemMemov\UnitRobot\Source\Reflection\Constructor;

class ClassConstructors
{
    private $constructors;
    
    public function __construct(
        Constructors $constructors
    ) {
        $this->constructors = $constructors;
    }
    
    public function createConstructor(
        \ReflectionClass $class
    ): Constructor
    {
        $constructorReflection = $class->getconstructor();

        if (is_null($constructorReflection)) {
            
            return $this->constructors->createEmptyConstructor();
            
        } else {

            return $this->constructors->createParameterizedConstructor(
                $constructorReflection
            );
            
        }
    }
}