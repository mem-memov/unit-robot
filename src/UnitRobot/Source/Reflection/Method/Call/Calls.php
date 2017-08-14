<?php
namespace MemMemov\UnitRobot\Source\Reflection\Method\Call;

class Calls
{
    public function createMethodCalls(string $methodString): MethodCalls
    {
        $variablePattern = '\$(this\s*->){0,1}\s*([_[:alnum:]]+)';
        $assignmentPattern = '((' . $variablePattern . ')\s*=\s*){0,1}';
        $functionPattern = '([_[:alnum:]]+)\(';
        $callPattern = $variablePattern.'\s*->\s*'.$functionPattern;
        $invocationPattern = '/'.$assignmentPattern.$callPattern.'/mU';
        preg_match_all($invocationPattern, $methodString, $matches);
        
        $callCount = count($matches[0]);
        
        foreach ($matches[0] as $index => $callMatch) {
            
            $callVariable = $matches[6][$index];
            $method = $matches[7][$index];
            $callVariableType = $matches[5][$index] === 'this->'
                ? 'property'
                : 'parameter';
            $hasResult = '' !== $matches[4][$index];

            if ($hasResult) {
                
                $resultVariable = $matches[4][$index];
                $resultVariableType = $matches[3][$index] === 'this->'
                    ? 'property'
                    : 'parameter';
            }
        }

        return new MethodCalls();
    }
}