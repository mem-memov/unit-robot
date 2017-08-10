<?php
namespace MemMemov\UnitRobot\Source;

class Reflection
{
    private $class;
    
    public function __construct(
        \ReflectionClass $class
    ) {
        $this->class = $class;
    }
    
    public function createTests()
    {
        var_dump($this->class->getName());
    }
}