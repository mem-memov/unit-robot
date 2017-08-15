<?php
namespace MemMemov\UnitRobot\Source\Reflection\Method\Call;

class Calls
{
    private $parser;
    private $positionings;
    
    public function __construct(
        Parse $parser,
        Positionings $positionings
    ) {
        $this->parser = $parser;
        $this->positionings = $positionings;
    }
    
    public function createMethodCalls(string $methodString): MethodCalls
    {
        $parsedMatches = $this->parser->parseMethod($methodString);
        
        $callPositionings = new CallPositionings();
        $parsedMatches->fillCallPositionings($callPositionings, $this->positionings);

        $callPositionings = $this->positionings->createCallPositionings($methodString, $matches);
        
        $methodCalls = new MethodCalls();
        $parsedMatches->fillMethodCalls($methodCalls, $callPositionings, $this->callTypes);

        return $methodCalls;
    }
}