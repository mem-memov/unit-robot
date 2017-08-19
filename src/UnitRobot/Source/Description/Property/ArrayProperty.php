<?php
namespace MemMemov\UnitRobot\Source\Description\Property;

class ArrayProperty implements Property
{
    private $name;
    
    public function __construct(
        string $name
    ) {
        $this->name = $name;
    }
}