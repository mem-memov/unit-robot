<?php
namespace MemMemov\UnitRobot\Source\Description\Instance;

use MemMemov\UnitRobot\UnitTest\UnitTest;

class Instance
{
    private $name;
    private $properties;
    private $methods;
    private $dependencies;
    
    public function __construct(
        InstanceName $name,
        InstanceProperties $properties,
        InstanceMethods $methods,
        InstanceDependencies $dependencies
    ) {
        $this->name = $name;
        $this->properties = $properties;
        $this->methods = $methods;
        $this->dependencies = $dependencies;
    }
    
    public function getName(): InstanceName
    {
        return $this->name;
    }
    
    public function getProperties(): InstanceProperties
    {
        return $this->properties;
    }
    
    public function getMethods(): InstanceMethods
    {
        return $this->methods;
    }
    
    public function getDependencies(): InstanceDependencies
    {
        return $this->dependencies;
    }
    
    public function createUnitTests(UnitTest $unitTest): void
    {
        $this->name->createUnitTests($unitTest);
        
        $this->dependencies->createUnitTests($unitTest);
        
        $this->properties->createUnitTests($unitTest);
        
        $unitTest->write();
    }
}