<?php
namespace MemMemov\UnitRobot\Source\Reflection\Method\Call;

class Positionings
{
    public function createPositioning(
        int $beforeParametersPosition,
        int $openBracketPosition,
        int $closeBracketPosition
    ): Positioning
    {
        return new Positioning(
            $beforeParametersPosition,
            $openBracketPosition,
            $closeBracketPosition
        );
    }
}