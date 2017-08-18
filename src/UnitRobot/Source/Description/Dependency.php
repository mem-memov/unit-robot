<?php
namespace MemMemov\UnitRobot\Source\Description;

class Dependency
{
    private $name;
    private $alias;
    
    public function __construct(
        InstanceName $name,
        string $alias
    ) {
        $this->name = $name;
        $this->alias = $alias;
    }
}