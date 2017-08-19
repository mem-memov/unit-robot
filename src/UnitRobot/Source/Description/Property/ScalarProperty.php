<?php
namespace MemMemov\UnitRobot\Source\Description\Property;

class ScalarProperty implements Property
{
    private $name;
    
    public function __construct(
        string $name
    ) {
        $this->name = $name;
    }
}