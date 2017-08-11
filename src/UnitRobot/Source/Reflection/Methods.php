<?php
namespace MemMemov\UnitRobot\Source\Reflection;

use MemMemov\UnitRobot\Source\Token\Tokens;

class Methods
{
    private $tokens;
    
    public function __construct(
        Tokens $tokens
    ) {
        $this->tokens = $tokens;
    }
    
    public function createMethod(
        \ReflectionMethod $methodReflection
    ): Method
    {
        return new Method(
            $methodReflection,
            $this->tokens
        );
    }
}