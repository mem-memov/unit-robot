<?php
namespace MemMemov\UnitRobot\Source\Description\Property;

class ObjectProperty implements Property
{
    private $name;
    private $namespace;
    private $class;
    private $alias;
    
    public function __construct(
        string $name,
        string $namespace,
        string $class,
        string $alias
    ) {
        $this->name = $name;
        $this->namespace = $namespace;
        $this->class = $class;
        $this->alias = $alias;
        
        //echo $namespace.'\\'.$class.' as '.$alias."\n";
    }
}