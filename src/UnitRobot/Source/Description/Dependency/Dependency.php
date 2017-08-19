<?php
namespace MemMemov\UnitRobot\Source\Description\Dependency;

use MemMemov\UnitRobot\Source\Description\Property\ObjectCollectionProperty;
use MemMemov\UnitRobot\Source\Description\Property\Properties;

class Dependency
{
    private $namespace;
    private $class;
    private $alias;
    
    public function __construct(
        string $namespace, 
        string $class, 
        string $alias
    ) {
        $this->namespace = $namespace;
        $this->class = $class;
        $this->alias = $alias;
    }
    
    public function isMatching(string $query): bool
    {
        if ($this->alias === $query) {
            return true;
        }
        
        if ($this->class === $query) {
            return true;
        }
        
        if ($this->namespace . '\\' . $this->class === $query) {
            return true;
        }
        
        return false;
    }
    
    public function createObjectCollectionProperty(
        string $name,
        Properties $properties
    ): ObjectCollectionProperty
    {
        return $properties->createObjectCollectionProperty(
            $name,
            $this->namespace,
            $this->class,
            $this->alias
        );
    }
}