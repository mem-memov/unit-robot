<?php
namespace MemMemov\UnitRobot\Source\Description\Instance;

use MemMemov\UnitRobot\Source\Description\Property\Property;
use MemMemov\UnitRobot\UnitTest\UnitTest;

class InstanceProperties
{
    private $properties;
    
    public function __construct()
    {
        $this->properties = [];
    }
    
    public function addProperty(Property $property): void
    {
        $this->properties[] = $property;
    }
    
    public function createUnitTests(UnitTest $unitTest): void
    {
        foreach ($this->properties as $property) {
            $property->addPropertyToUnitTest($unitTest);
        }
    }
}