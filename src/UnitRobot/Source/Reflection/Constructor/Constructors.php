<?php
namespace MemMemov\UnitRobot\Source\Reflection\Constructor;

use MemMemov\UnitRobot\Source\Reflection\Parameter\Parameters;
use MemMemov\UnitRobot\Source\Reflection\Method\MethodSignature;
use MemMemov\UnitRobot\Source\Token\MethodSignatures as MethodSignatureTokens;
use MemMemov\UnitRobot\Source\Reflection\Comment\MethodComments;
use MemMemov\UnitRobot\Source\Description\Instance\Instancies;

class Constructors
{
    private $methodSignatureTokens;
    private $parameters;
    private $methodComments;
    private $instances;
    
    public function __construct(
        MethodSignatureTokens $methodSignatureTokens,
        Parameters $parameters,
        MethodComments $methodComments,
        Instancies $instances
    ) {
        $this->methodSignatureTokens = $methodSignatureTokens;
        $this->parameters = $parameters;
        $this->methodComments = $methodComments;
        $this->instances = $instances;
    }
    
    public function createEmptyConstructor(): EmptyConstructor
    {
        return new EmptyConstructor(
            $this->instances
        );
    }
    
    public function createParameterizedConstructor(
        \ReflectionMethod $constructorReflection
    ): ParameterizedConstructor
    {
        return new ParameterizedConstructor(
            $constructorReflection,
            new MethodSignature(
                $constructorReflection,
                $this->methodSignatureTokens
            ),
            $this->parameters,
            $this->methodComments
        );
    }
}