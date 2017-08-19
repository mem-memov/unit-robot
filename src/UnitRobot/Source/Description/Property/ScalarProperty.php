<?php
namespace MemMemov\UnitRobot\Source\Description\Property;

use MemMemov\UnitRobot\Source\Description\Type\Scalar\ScalarType;
use MemMemov\UnitRobot\UnitTest\UnitTest;

class ScalarProperty implements Property
{
    private $name;
    private $type;
    
    public function __construct(
        string $name,
        ScalarType $type
    ) {
        $this->name = $name;
        $this->type = $type;
    }
    
    public function addPropertyToUnitTest(UnitTest $unitTest): void
    {
        
    }
}