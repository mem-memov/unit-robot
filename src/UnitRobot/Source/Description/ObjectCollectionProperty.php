<?php
namespace MemMemov\UnitRobot\Source\Description;

class ObjectCollectionProperty implements Property
{
    private $name;
    private $type;
    
    public function __construct(
        string $name,
        string $type
    ) {
        $this->name = $name;
        $this->type = $type;
    }
}