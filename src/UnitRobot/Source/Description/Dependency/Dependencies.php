<?php
namespace MemMemov\UnitRobot\Source\Description\Dependency;

class Dependencies
{
    public function createDependency(
        string $namespace, 
        string $class, 
        string $alias
    ): Dependency
    {
        return new Dependency($namespace, $class, $alias);
    }
}