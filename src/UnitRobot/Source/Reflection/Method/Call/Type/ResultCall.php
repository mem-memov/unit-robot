<?php
namespace MemMemov\UnitRobot\Source\Reflection\Method\Call\Type;

use MemMemov\UnitRobot\Source\Reflection\Method\Call\Variable\Variable;
use MemMemov\UnitRobot\UnitTest\Builder\Declarations as UnitTestDeclarations;
use MemMemov\UnitRobot\UnitTest\Builder\CallDeclarations as UnitTestCallDeclarations;

class ResultCall implements Call
{
    private $callVariable;
    private $method;
    private $resultVariable;
    
    public function __construct(
        Variable $callVariable,
        string $method,
        Variable $resultVariable
    ) {
        $this->callVariable = $callVariable;
        $this->method = $method;
        $this->resultVariable = $resultVariable;
    }
    
    public function fillUnitTestMethod(
        UnitTestDeclarations $declarations,
        UnitTestCallDeclarations $callDeclarations
    ): void
    {
        $callDeclaration = $declarations->createResultCallDeclaration(
            $this->callVariable->toString(), 
            $this->method,
            $this->resultVariable->toString(),
            'string' //TODO
        );
        
        $callDeclarations->addDeclaration($callDeclaration);
    }
}