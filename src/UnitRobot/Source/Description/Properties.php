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
    
    public function createScalarCollectionProperty(
        string $name,
        string $type
    ): ScalarCollectionProperty
    {
        return new ScalarCollectionProperty(
            $name,
            $type
        );
    }
    
    public function createObjectCollectionProperty(
        string $name,
        string $type
    ): ObjectCollectionProperty
    {
        return new ObjectCollectionProperty(
            $name,
            $type
        );
    }
    
    public function createDependencyCollectionProperty(
        string $name,
        Dependency $dependency
    ): DependencyCollectionProperty
    {
        return new DependencyCollectionProperty(
            $name,
            $dependency
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