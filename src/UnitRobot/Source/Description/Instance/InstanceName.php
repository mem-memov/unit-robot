<?php
namespace MemMemov\UnitRobot\Source\Description\Instance;

use MemMemov\UnitRobot\UnitTest\UnitTest;

class InstanceName
{
    private $namespace;
    private $class;

    public function setNamespace(string $namespace): void
    {
        $this->namespace = $namespace;
    }
    
    public function setClass(string $class): void
    {
        $this->class = $class;
    }
    
    public function createUnitTests(UnitTest $unitTest): void
    {
        $unitTest->setNamespace($this->namespace);
        $unitTest->setClassName($this->class);
    }
}