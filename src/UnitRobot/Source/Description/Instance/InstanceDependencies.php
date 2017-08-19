<?php
namespace MemMemov\UnitRobot\Source\Description\Instance;

use MemMemov\UnitRobot\Source\Description\Dependency\Dependency;

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
    
    public function has(string $query): bool
    {
        foreach ($this->dependencies as $dependency) {
            if ($dependency->isMatching($query)) {
                return true;
            }
        }
        
        return false;
    }
    
    public function get(string $query): Dependency
    {
        foreach ($this->dependencies as $dependency) {
            if ($dependency->isMatching($query)) {
                return $dependency;
            }
        }
        
        throw new \Exception('No match for query ' . $query);
    }
}