<?php
namespace MemMemov\UnitRobot\Source\Reflection\Method;

use MemMemov\UnitRobot\Source\Reflection\Comment\MethodComments;
use MemMemov\UnitRobot\Source\Reflection\Method\Call\Calls;
use MemMemov\UnitRobot\Source\Reflection\Method\ReturnType\ReturnTypes;
use MemMemov\UnitRobot\Source\Reflection\Parameter\Parameters;
use MemMemov\UnitRobot\Source\Token\MethodSignatures as MethodSignatureTokens;
use MemMemov\UnitRobot\Source\Token\MethodBodies as MethodBodyTokens;
use MemMemov\UnitRobot\Source\Description\Signature\Signatures;

class Methods
{
    private $methodSignatureTokens;
    private $methodBodyTokens;
    private $parameters;
    private $calls;
    private $methodComments;
    private $signatures;
    private $returnTypes;
    
    public function __construct(
        MethodSignatureTokens $methodSignatureTokens,
        MethodBodyTokens $methodBodyTokens,
        Parameters $parameters,
        Calls $calls,
        MethodComments $methodComments,
        Signatures $signatures,
        ReturnTypes $returnTypes
    ) {
        $this->methodSignatureTokens = $methodSignatureTokens;
        $this->methodBodyTokens = $methodBodyTokens;
        $this->parameters = $parameters;
        $this->calls = $calls;
        $this->methodComments = $methodComments;
        $this->signatures = $signatures;
        $this->returnTypes = $returnTypes;
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
            $this->methodComments,
            $this->signatures,
            $this->returnTypes
        );
    }
}