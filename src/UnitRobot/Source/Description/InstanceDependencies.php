<?php
namespace MemMemov\UnitRobot\Source\Description;

class InstanceDependencies
{
    private $dependencies;
    
    public function __construct()
    {
        $this->dependencies = [];
    }
    
    public function addDependency(Dependency $dependency): void
    {
        $this->dependencies[] = $dependency;
    }
}