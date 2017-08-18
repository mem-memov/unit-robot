<?php
namespace MemMemov\UnitRobot\Source\Description;

class Properties
{
    public function createArrayProperty(
        string $name
    ): ArrayProperty
    {
        return new ArrayProperty(
            $name
        );
    }
    
    public function createCollectionProperty(
        string $name,
        string $type
    ): CollectionProperty
    {
        return new CollectionProperty(
            $name,
            $type
        );
    }
    
    public function createScalarProperty(
        string $name
    ): ScalarProperty
    {
        return new ScalarProperty(
            $name
        );
    }
    
    public function createObjectProperty(
        string $name,
        string $namespace,
        string $class,
        string $alias
    ): ObjectProperty
    {
        return new ObjectProperty(
            $name,
            $namespace,
            $class,
            $alias
        );
    }
}