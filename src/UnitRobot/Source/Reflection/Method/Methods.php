<?php
namespace MemMemov\UnitRobot\Source\Reflection\Method;

use MemMemov\UnitRobot\Source\Reflection\Method\Call\Calls;
use MemMemov\UnitRobot\Source\Reflection\Method\Parameter\Parameters;
use MemMemov\UnitRobot\Source\Token\MethodSignatures as MethodSignatureTokens;
use MemMemov\UnitRobot\Source\Token\MethodBodies as MethodBodyTokens;

class Methods
{
    private $methodSignatureTokens;
    private $methodBodyTokens;
    private $parameters;
    private $calls;
    
    public function __construct(
        MethodSignatureTokens $methodSignatureTokens,
        MethodBodyTokens $methodBodyTokens,
        Parameters $parameters,
        Calls $calls
    ) {
        $this->methodSignatureTokens = $methodSignatureTokens;
        $this->methodBodyTokens = $methodBodyTokens;
        $this->parameters = $parameters;
        $this->calls = $calls;
    }
    
    public function createConstructor(
        \ReflectionClass $class
    ): Constructor
    {
        $constructorReflection = $class->getconstructor();
        $className = $class->getShortName();
        
        if (is_null($constructorReflection)) {
            return new EmptyConstructor(
                $className,
                $this->parameters
            );
        }
        
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
            $this->calls
        );
    }
}