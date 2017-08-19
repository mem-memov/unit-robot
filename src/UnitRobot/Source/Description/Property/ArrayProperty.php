<?php
namespace MemMemov\UnitRobot\Source\Description\Property;

use MemMemov\UnitRobot\Source\Description\Type\Collection\MixedArrayType;
use MemMemov\UnitRobot\UnitTest\UnitTest;

class ArrayProperty implements Property
{
    private $name;
    private $type;
    
    public function __construct(
        string $name,
        MixedArrayType $type
    ) {
        $this->name = $name;
        $this->type = $type;
    }
    
    public function addPropertyToUnitTest(UnitTest $unitTest): void
    {
        $unitTest->addProperty($this->type->getForSignature(), $this->name);
    }
}