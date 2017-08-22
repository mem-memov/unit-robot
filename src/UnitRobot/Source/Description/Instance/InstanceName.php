<?php
namespace MemMemov\UnitRobot\Source\Description\Instance;

use MemMemov\UnitRobot\UnitTest\UnitTest;

class InstanceName
{
    private $namespace;
    private $class;
    
    public function __construct(
        string $namespace,
        string $class
    ) {
        $this->namespace = $namespace;
        $this->class = $class;
    }
    
    public function createUnitTests(UnitTest $unitTest): void
    {
        $unitTest->setNamespace($this->namespace);
        $unitTest->setClassName($this->class);
    }
    
    public function getShortClassName(): string
    {
        return $this->class;
    }
}