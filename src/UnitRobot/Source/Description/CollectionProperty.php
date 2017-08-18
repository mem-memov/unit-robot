<?php
namespace MemMemov\UnitRobot\Source\Description;

class CollectionProperty implements Property
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