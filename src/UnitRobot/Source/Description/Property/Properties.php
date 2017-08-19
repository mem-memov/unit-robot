<?php
namespace MemMemov\UnitRobot\Source\Description\Property;

use MemMemov\UnitRobot\Source\Description\Type\Types;

class Properties
{
    private $types;
    
    public function __construct(
        Types $types
    ) {
        $this->types = $types;
    }
    
    public function createArrayProperty(
        string $name
    ): ArrayProperty
    {
        $type = $this->types->createArrayType();
        
        return new ArrayProperty($name, $type);
    }
    
    public function createObjectCollectionProperty(
        string $name,
        string $namespace,
        string $class,
        string $alias
    ): ObjectCollectionProperty
    {
        $itemType = $this->types->createObjectType($namespace, $class, $alias);
        
        $type = $this->types->createObjectArrayType($itemType);
        
        return new ObjectCollectionProperty($name, $type);
    }
    
    public function createObjectProperty(
        string $name,
        string $namespace,
        string $class,
        string $alias
    ): ObjectProperty
    {
        $type = $this->types->createObjectType($namespace, $class, $alias);
        
        return new ObjectProperty($name, $type);
    }
    
    public function createScalarCollectionProperty(
        string $name,
        string $type
    ): ScalarCollectionProperty
    {
        $scalarType = $this->types->createScalarType($type);
        
        return new ScalarCollectionProperty($name, $scalarType);
    }
    
    public function createScalarProperty(
        string $name,
        string $type
    ): ScalarProperty
    {
        $scalarType = $this->types->createScalarType($type);
        
        return new ScalarProperty($name, $scalarType);
    }
}