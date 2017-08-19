<?php
namespace MemMemov\UnitRobot\Source\Reflection\Method;

use MemMemov\UnitRobot\Source\Reflection\Method\Call\Calls;
use MemMemov\UnitRobot\Source\Reflection\Parameter\Parameters;
use MemMemov\UnitRobot\Source\Token\MethodSignatures as MethodSignatureTokens;
use MemMemov\UnitRobot\Source\Token\MethodBodies as MethodBodyTokens;
use MemMemov\UnitRobot\Source\Reflection\Comment\MethodComments;

class Methods
{
    private $methodSignatureTokens;
    private $methodBodyTokens;
    private $parameters;
    private $calls;
    private $methodComments;
    
    public function __construct(
        MethodSignatureTokens $methodSignatureTokens,
        MethodBodyTokens $methodBodyTokens,
        Parameters $parameters,
        Calls $calls,
        MethodComments $methodComments
    ) {
        $this->methodSignatureTokens = $methodSignatureTokens;
        $this->methodBodyTokens = $methodBodyTokens;
        $this->parameters = $parameters;
        $this->calls = $calls;
        $this->methodComments = $methodComments;
    }
    
    public function createMethod(
        \ReflectionMethod $methodReflection,
        string $className
    ): Method
    {
        return new Method(
            $methodReflection,
            $className,
            new MethodSignature(
                $methodReflection,
                $this->methodSignatureTokens
            ),
            new MethodBody(
                $methodReflection,
                $this->methodBodyTokens
            ),
            $this->parameters,
            $this->calls,
            $this->methodComments
        );
    }
}