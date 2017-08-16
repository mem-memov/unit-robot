<?php
namespace MemMemov\UnitRobot\Source\Reflection\Method\Call;

use MemMemov\UnitRobot\Source\Reflection\Method\Call\Parser\Parser;
use MemMemov\UnitRobot\Source\Reflection\Method\Call\Type\CallTypes;
use MemMemov\UnitRobot\Source\Reflection\Method\Call\Variable\Variables;

class Calls
{
    private $parser;
    private $positionings;
    private $callTypes;
    private $variables;
    
    public function __construct(
        Parser $parser,
        Positionings $positionings,
        CallTypes $callTypes,
        Variables $variables
    ) {
        $this->parser = $parser;
        $this->positionings = $positionings;
        $this->callTypes = $callTypes;
        $this->variables = $variables;
    }
    
    public function createMethodCalls(string $methodString): MethodCalls
    {
        $parsedMatches = $this->parser->parseMethod($methodString);
        
        $callPositionings = new CallPositionings();
        $parsedMatches->fillCallPositionings(
            $methodString,
            $callPositionings, 
            $this->positionings
        );

        $methodCalls = new MethodCalls();
        $parsedMatches->fillMethodCalls(
            $methodCalls, 
            $callPositionings, 
            $this->callTypes,
            $this->variables
        );

        return $methodCalls;
    }
}