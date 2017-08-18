<?php
namespace MemMemov\UnitRobot\Source\Reflection\Method\Constructor;

use MemMemov\UnitRobot\Source\Reflection\Method\Parameter\Parameters;
use MemMemov\UnitRobot\Source\Reflection\Method\MethodSignature;
use MemMemov\UnitRobot\Source\Token\MethodSignatures as MethodSignatureTokens;
use MemMemov\UnitRobot\Source\Reflection\Method\MethodComments;

class Constructors
{
    private $methodSignatureTokens;
    private $parameters;
    private $methodComments;
    
    public function __construct(
        MethodSignatureTokens $methodSignatureTokens,
        Parameters $parameters,
        MethodComments $methodComments
    ) {
        $this->methodSignatureTokens = $methodSignatureTokens;
        $this->parameters = $parameters;
        $this->methodComments = $methodComments;
    }
    
    public function createEmptyConstructor(
        string $className
    ): EmptyConstructor
    {
        return new EmptyConstructor(
            $className,
            $this->parameters
        );
    }
    
    public function createParameterizedConstructor(
        \ReflectionMethod $constructorReflection,
        string $className
    ): ParameterizedConstructor
    {
        return new ParameterizedConstructor(
            $constructorReflection,
            $className,
            new MethodSignature(
                $constructorReflection,
                $this->methodSignatureTokens
            ),
            $this->parameters,
            $this->methodComments
        );
    }
}