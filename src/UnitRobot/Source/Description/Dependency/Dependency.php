<?php
namespace MemMemov\UnitRobot\Source\Description\Dependency;

use MemMemov\UnitRobot\Source\Description\Property\ObjectCollectionProperty;
use MemMemov\UnitRobot\Source\Description\Property\Properties;
use MemMemov\UnitRobot\Source\Description\Parameter\ObjectCollectionParameter;
use MemMemov\UnitRobot\Source\Description\Parameter\Parameters;
use MemMemov\UnitRobot\Source\Description\Type\Collection\ObjectArrayType;
use MemMemov\UnitRobot\Source\Description\Type\Types;
use MemMemov\UnitRobot\UnitTest\UnitTest;

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
    
    public function createObjectCollectionParameter(
        string $name,
        Parameters $parameters
    ): ObjectCollectionParameter
    {
        return $properties->createObjectCollectionParameter(
            $name,
            $this->namespace,
            $this->class,
            $this->alias
        );
    }
    
    public function createObjectArrayType(
        string $name,
        Types $type
    ): ObjectArrayType
    {
        return $types->createObjectArrayType(
            $name,
            $this->namespace,
            $this->class,
            $this->alias
        );
    }
    
    public function createUnitTests(UnitTest $unitTest): void
    {
        $fullClassName = $this->namespace . '\\' . $this->class;
    
        $unitTest->addDependency($fullClassName, $this->alias);
    }
}