<?php
namespace MemMemov\UnitRobot\Source\Reflection\Method\Call;

use MemMemov\UnitRobot\Source\Reflection\Method\Call\Type\Call;
use MemMemov\UnitRobot\UnitTest\MethodCalls as UnitTestMethodCalls;
use MemMemov\UnitRobot\UnitTest\Builder\Declarations as UnitTestDeclarations;
use MemMemov\UnitRobot\UnitTest\Builder\CallDeclarations as UnitTestCallDeclarations;

class MethodCalls implements UnitTestMethodCalls
{
    private $calls;
    
    public function __construct()
    {
        $this->calls = [];
    }
    
    public function addCall(Call $call): void
    {
        $this->calls[] = $call;
    }
    
    public function fillUnitTestMethod(
        UnitTestDeclarations $declarations,
        UnitTestCallDeclarations $callDeclarations
    ): void
    {
        foreach ($this->calls as $call) {
            $call->fillUnitTestMethod(
                $declarations,
                $callDeclarations
            );
        }
    }
}