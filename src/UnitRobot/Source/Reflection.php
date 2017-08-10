<?php
namespace MemMemov\UnitRobot\Source;

class Reflection
{
    private $class;
    private $methods;
    
    public function __construct(
        \ReflectionClass $class,
        Methods $methods
    ) {
        $this->class = $class;
        $this->methods = $methods;
    }
    
    public function createTests(Text $text)
    {
        $methodReflections = $this->class->getMethods(\ReflectionMethod::IS_PUBLIC);
        
        foreach ($methodReflections as $methodReflection) {
            $method = $this->methods->createMethod($methodReflection);
            $method->createTests($text);
        }
    }
}