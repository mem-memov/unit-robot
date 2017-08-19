<?php
namespace MemMemov\UnitRobot\Source\Description\Instance;

class Instancies
{
    public function createInstance(
        InstanceName $name,
        InstanceProperties $properties,
        InstanceMethods $methods,
        InstanceDependencies $dependencies
    ): Instance
    {
        return new Instance(
            $name,
            $properties,
            $methods,
            $dependencies
        );
    }
    
    public function createInstanceName(
        string $namespace,
        string $class
    ): InstanceName
    {
        return new InstanceName($namespace, $class);
    }
    
    public function createInstanceProperties(): InstanceProperties
    {
        return new InstanceProperties();
    }
    
    public function createInstanceMethods(): InstanceMethods
    {
        return new InstanceMethods();
    }
    
    public function createInstanceDependencies(): InstanceDependencies
    {
        return new InstanceDependencies();
    }
}