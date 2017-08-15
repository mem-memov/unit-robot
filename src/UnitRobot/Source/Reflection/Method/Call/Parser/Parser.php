<?php
namespace MemMemov\UnitRobot\Source\Reflection\Method\Call\Parser;

class Parser
{
    public function parseMethod(string $methodString): ParsedMatches
    {
        $variablePattern = '\$(this\s*->){0,1}\s*([_[:alnum:]]+)';
        $assignmentPattern = '((' . $variablePattern . ')\s*=\s*)';
        $returnPattern = '\s+(return)\s+';
        $functionPattern = '([_[:alnum:]]+)\(';
        $callPattern = $variablePattern.'\s*->\s*'.$functionPattern;
        $invocationPattern = '/(' . $assignmentPattern . '|' . $returnPattern . '){0,1}' .$callPattern.'/mU';
        preg_match_all($invocationPattern, $methodString, $matches);
        
        return new ParsedMatches($matches);
    }
}