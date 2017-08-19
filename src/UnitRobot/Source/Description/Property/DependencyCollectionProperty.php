<?php
namespace MemMemov\UnitRobot\Source\Description\Property;

class DependencyCollectionProperty implements Property
{
    private $name;
    private $dependency;
    
    public function __construct(
        string $name,
        Dependency $dependency
    ) {
        $this->name = $name;
        $this->dependency = $dependency;
    }
}