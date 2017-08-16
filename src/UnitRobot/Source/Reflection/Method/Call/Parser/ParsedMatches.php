<?php
namespace MemMemov\UnitRobot\Source\Reflection\Method\Call\Parser;

use MemMemov\UnitRobot\Source\Reflection\Method\Call\Type\CallTypes;
use MemMemov\UnitRobot\Source\Reflection\Method\Call\CallPositionings;
use MemMemov\UnitRobot\Source\Reflection\Method\Call\MethodCalls;
use MemMemov\UnitRobot\Source\Reflection\Method\Call\Positionings;
use MemMemov\UnitRobot\Source\Reflection\Method\Call\Variable\Variables;

class ParsedMatches
{
    private $matches;
    
    public function __construct(
        array $matches
    ) {
        $this->matches = $matches;
    }
    
    public function fillCallPositionings(
        string $methodString,
        CallPositionings $callPositionings, 
        Positionings $positionings
    ): void
    {
        $offset = 0;
        foreach ($this->matches[0] as $index => $callMatch) {
            
            $beforeParameters = $this->matches[0][$index];
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
            
            $positioning = $positionings->createPositioning(
                $beforeParametersPosition,
                $openBracketPosition,
                $closeBracketPosition
            );
            
            $callPositionings->addPositioning($positioning);
        }
    }
    
    public function fillMethodCalls(
        MethodCalls $methodCalls, 
        CallPositionings $callPositionings,
        CallTypes $callTypes,
        Variables $variables
    ): void
    {
        foreach ($this->matches[0] as $index => $callMatch) {

            $callVariableName = $this->matches[8][$index];
            
            $callVariable = ($this->matches[7][$index] === 'this->')
                ? $variables->createPropertyVariable($callVariableName)
                : $variables->createParameterVariable($callVariableName);
                
            $method = $this->matches[9][$index];
                
            $callPositioning = $callPositionings->getByIndex($index);

            $hasResult = ('' !== $this->matches[5][$index]);
            $isReturn = ('return' === $this->matches[6][$index]);
            
            if ($hasResult) {
                $resultVariableName = $this->matches[5][$index];
                $resultVariable = $this->matches[7][$index] === 'this->'
                    ? $variables->createPropertyVariable($resultVariableName)
                    : $variables->createParameterVariable($resultVariableName);
                
                $methodCall = $callTypes->createResultCall(
                    $callVariable,
                    $method,
                    $resultVariable
                );
            } elseif ($isReturn) {
                $methodCall = $callTypes->createReturnCall(
                    $callVariable,
                    $method
                );
            } else {
                $methodCall = $callTypes->createSimpleCall(
                    $callVariable,
                    $method
                );
            }

            $methodCalls->addCall($methodCall);
        }
    }
}