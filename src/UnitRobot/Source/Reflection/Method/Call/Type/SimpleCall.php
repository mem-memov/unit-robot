<?php
namespace MemMemov\UnitRobot\Source\Reflection\Method\Call\Type;

use MemMemov\UnitRobot\Source\Reflection\Method\Call\Variable\Variable;
use MemMemov\UnitRobot\UnitTest\Builder\Declarations as UnitTestDeclarations;
use MemMemov\UnitRobot\UnitTest\Builder\CallDeclarations as UnitTestCallDeclarations;

class SimpleCall implements Call
{
    private $callVariable;
    private $method;
    
    public function __construct(
        Variable $callVariable,
        string $method
    ) {
        $this->callVariable = $callVariable;
        $this->method = $method;
    }
    
    public function fillUnitTestMethod(
        UnitTestDeclarations $declarations,
        UnitTestCallDeclarations $callDeclarations
    ): void
    {
        $callDeclaration = $declarations->createSimpleCallDeclaration(
            $this->callVariable->toString(), 
            $this->method
        );
        
        $callDeclarations->addDeclaration($callDeclaration);
    }
}