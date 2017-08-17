<?php
namespace MemMemov\UnitRobot\Source\Reflection\Method\Constructor;

use MemMemov\UnitRobot\Source\Reflection\Method\Parameter\Parameters;
use MemMemov\UnitRobot\Source\Reflection\Method\MethodSignature;
use MemMemov\UnitRobot\Source\Token\MethodSignatures as MethodSignatureTokens;

class Constructors
{
    private $methodSignatureTokens;
    private $parameters;
    
    public function __construct(
        MethodSignatureTokens $methodSignatureTokens,
        Parameters $parameters
    ) {
        $this->methodSignatureTokens = $methodSignatureTokens;
        $this->parameters = $parameters;
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
            $this->parameters
        );
    }
}