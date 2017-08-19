<?php
namespace MemMemov\UnitRobot\Source\Description\Property;

use MemMemov\UnitRobot\Source\Description\Type\ObjectType;
use MemMemov\UnitRobot\UnitTest\UnitTest;

class ObjectProperty implements Property
{
    private $name;
    private $type;
    
    public function __construct(
        string $name,
        ObjectType $type
    ) {
        $this->name = $name;
        $this->type = $type;
    }
    
    public function addPropertyToUnitTest(UnitTest $unitTest): void
    {
        
    }
}