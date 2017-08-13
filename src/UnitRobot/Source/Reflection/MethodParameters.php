<?php
namespace MemMemov\UnitRobot\Source\Reflection;

use MemMemov\UnitRobot\UnitTest\UnitTest;

class MethodParameters
{
    private $parameters;
    
    public function __construct(
        array $parameters
    ) {
        $this->parameters = $parameters;
    }
    
    public function addPropertiesToUnitTest(UnitTest $unitTest): void
    {
        foreach ($this->parameters as $parameter) {
            $parameter->addPropertyToUnitTest($unitTest);
        }
    }
}