<?php
namespace MemMemov\UnitRobot\Source\Description;

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
}