<?php
namespace MemMemov\UnitRobot\Source\Reflection;

use MemMemov\UnitRobot\UnitTest\UnitTest;

class Parameter
{
    private $reflection;
    private $type;
    
    public function __construct(
        \ReflectionParameter $reflection,
        string $type
    ) {
        $this->reflection = $reflection;
        $this->type = $type;
    }
    
    public function addPropertyToUnitTest(UnitTest $unitTest): void
    {
        $unitTest->addProperty($this->type, $this->reflection->getName());
    }
}