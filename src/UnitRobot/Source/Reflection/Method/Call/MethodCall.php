<?php
namespace MemMemov\UnitRobot\Source\Reflection\Method\Call;

class MethodCall
{
    private $callPositioning;
    
    public function __construct(
        Positioning $callPositioning
    ) {
        $this->callPositioning = $callPositioning;
    }
}