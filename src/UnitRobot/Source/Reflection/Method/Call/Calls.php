<?php
namespace MemMemov\UnitRobot\Source\Reflection\Method\Call;

class Calls
{
    private $positionings;
    
    public function __construct(
        Positionings $positionings
    ) {
        $this->positionings = $positionings;
    }
    
    public function createMethodCalls(string $methodString): MethodCalls
    {
        $methodCalls = new MethodCalls();
        
        $variablePattern = '\$(this\s*->){0,1}\s*([_[:alnum:]]+)';
        $assignmentPattern = '((' . $variablePattern . ')\s*=\s*)';
        $returnPattern = '\s+(return)\s+';
        $functionPattern = '([_[:alnum:]]+)\(';
        $callPattern = $variablePattern.'\s*->\s*'.$functionPattern;
        $invocationPattern = '/(' . $assignmentPattern . '|' . $returnPattern . '){0,1}' .$callPattern.'/mU';
        preg_match_all($invocationPattern, $methodString, $matches);

        $callCount = count($matches[0]);
        
        $callPositionings = $this->positionings->createCallPositionings($methodString, $matches);

        foreach ($matches[0] as $index => $callMatch) {

            $callVariable = $matches[8][$index];
            $method = $matches[9][$index];
            $callVariableType = $matches[7][$index] === 'this->'
                ? 'property'
                : 'parameter';
                
            $hasResult = '' !== $matches[5][$index];
            if ($hasResult) {
                $resultVariable = $matches[5][$index];
                $resultVariableType = $matches[7][$index] === 'this->'
                    ? 'property'
                    : 'parameter';
            };
            
            $methodCall = new MethodCall();
            $methodCalls->addCall($methodCall);
        }
        
        return $methodCalls;
    }
}