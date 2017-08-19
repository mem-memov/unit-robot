<?php
namespace MemMemov\UnitRobot\Source\Description;

use MemMemov\UnitRobot\Source\Description\Property\Property;

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
}