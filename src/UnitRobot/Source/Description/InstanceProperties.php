<?php
namespace MemMemov\UnitRobot\Source\Description;

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