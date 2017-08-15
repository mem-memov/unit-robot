<?php
namespace MemMemov\UnitRobot\Source\Reflection\Method\Call;

class CallPositionings
{
    private $positionings;
    
    public function __construct()
    {
        $this->positionings = [];
    }
    
    public function addPositioning(Positioning $positioning): void
    {
        $this->positionings[] = $positioning;
    }
}