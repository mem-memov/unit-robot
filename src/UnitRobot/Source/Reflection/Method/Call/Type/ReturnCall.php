<?php
namespace MemMemov\UnitRobot\Source\Reflection\Method\Call\Type;

use MemMemov\UnitRobot\Source\Reflection\Method\Call\Variable\Variable;
use MemMemov\UnitRobot\UnitTest\Builder\Declarations as UnitTestDeclarations;
use MemMemov\UnitRobot\UnitTest\Builder\CallDeclarations as UnitTestCallDeclarations;

class ReturnCall implements Call
{
    private $callVariable;
    private $method;
    
    public function __create(
        Variable $callVariable,
        string $method
    ): SimpleCall
    {
        $this->callVariable = $callVariable;
        $this->method = $method;
    }
    
    public function fillUnitTestMethod(
        UnitTestDeclarations $declarations,
        UnitTestCallDeclarations $callDeclarations
    ): void
    {
        
    }
}