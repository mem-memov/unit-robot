<?php
namespace MemMemov\UnitRobot\Source\Description;

class ScalarProperty implements Property
{
    private $name;
    
    public function __construct(
        string $name
    ) {
        $this->name = $name;
    }
}