<?php
namespace MemMemov\UnitRobot\Source\Reflection;

use MemMemov\UnitRobot\Source\Token\MethodSignatures as MethodSignatureTokens;
use MemMemov\UnitRobot\Source\Token\MethodBodies as MethodBodyTokens;

class Methods
{
    private $methodSignatureTokens;
    private $methodBodyTokens;
    private $parameters;
    
    public function __construct(
        MethodSignatureTokens $methodSignatureTokens,
        MethodBodyTokens $methodBodyTokens,
        Parameters $parameters
    ) {
        $this->methodSignatureTokens = $methodSignatureTokens;
        $this->methodBodyTokens = $methodBodyTokens;
        $this->parameters = $parameters;
    }
    
    public function createMethod(
        \ReflectionMethod $methodReflection
    ): Method
    {
        return new Method(
            $methodReflection,
            new MethodSignature(
                $methodReflection,
                $this->methodSignatureTokens
            ),
            new MethodBody(
                $methodReflection,
                $this->methodBodyTokens
            ),
            $this->parameters
        );
    }
}