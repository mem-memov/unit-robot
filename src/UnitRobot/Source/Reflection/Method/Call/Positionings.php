<?php
namespace MemMemov\UnitRobot\Source\Reflection\Method\Call;

class Positionings
{
    public function createCallPositionings(
        string $methodString, 
        array $matches
    ): CallPositionings
    {
        $callPositionings = new CallPositionings();
        
        $offset = 0;
        foreach ($matches[0] as $index => $callMatch) {
            
            $beforeParameters = $matches[0][$index];
            $beforeParametersPosition = strpos($methodString, $beforeParameters, $offset);
            $offset = $beforeParametersPosition + strlen($beforeParameters);
            $openBracketPosition = $offset - 1;
            
            $nextPosition = $offset;
            $depth = 1;
            do {
                $character = $methodString[$nextPosition];
                if ('(' === $character) {
                    $depth++;
                }
                if (')' === $character) {
                    $depth--;
                }
                if ($depth > 0) {
                    $nextPosition++;
                }
            } while($depth > 0);
            $closeBracketPosition = $nextPosition;
            
            $positioning =  new Positioning(
                $beforeParametersPosition,
                $openBracketPosition,
                $closeBracketPosition
            );
            
            $callPositionings->addPositioning($positioning);
        }
        
        return $callPositionings;
    }
}