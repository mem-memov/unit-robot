<?php
namespace MemMemov\UnitRobot\Source\Description\Parameter;

use MemMemov\UnitRobot\Source\Description\Type\Types;

class Parameters
{
    private $types;
    
    public function __construct(
        Types $types
    ) {
        $this->types = $types;
    }
    
    public function createArrayParameter(
        string $name
    ): ArrayParameter
    {
        $type = $this->types->createArrayType();
        
        return new ArrayParameter($name, $type);
    }
    
    public function createObjectCollectionParameter(
        string $name,
        string $namespace,
        string $class,
        string $alias
    ): ObjectCollectionParameter
    {
        $itemType = $this->types->createObjectType($namespace, $class, $alias);
        
        $type = $this->types->createObjectArrayType($itemType);
        
        return new ObjectCollectionParameter($name, $type);
    }
    
    public function createObjectParameter(
        string $name,
        string $namespace,
        string $class,
        string $alias
    ): ObjectParameter
    {
        $type = $this->types->createObjectType($namespace, $class, $alias);
        
        return new ObjectParameter($name, $type);
    }
    
    public function createScalarCollectionProperty(
        string $name,
        string $type
    ): ScalarCollectionProperty
    {
        $scalarType = $this->types->createScalarType($type);
        
        return new ScalarCollectionParameter($name, $scalarType);
    }
    
    public function isScalarType(string $name): bool
    {
        return $this->types->isScalarType($name);
    }
    
    public function createScalarParameter(
        string $name,
        string $type
    ): ScalarParameter
    {
        $scalarType = $this->types->createScalarType($type);
        
        return new ScalarParameter($name, $scalarType);
    }
}