<?php
namespace MemMemov\UnitRobot\Source\Description;

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
}