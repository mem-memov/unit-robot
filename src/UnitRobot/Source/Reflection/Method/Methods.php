<?php
namespace MemMemov\UnitRobot\Source\Reflection\Method;

use MemMemov\UnitRobot\Source\Reflection\Method\Call\Calls;
use MemMemov\UnitRobot\Source\Reflection\Method\Constructor\Constructors;
use MemMemov\UnitRobot\Source\Reflection\Method\Constructor\Constructor;
use MemMemov\UnitRobot\Source\Reflection\Method\Parameter\Parameters;
use MemMemov\UnitRobot\Source\Token\MethodSignatures as MethodSignatureTokens;
use MemMemov\UnitRobot\Source\Token\MethodBodies as MethodBodyTokens;
use MemMemov\UnitRobot\Source\Reflection\Method\MethodComments;

class Methods
{
    private $methodSignatureTokens;
    private $methodBodyTokens;
    private $parameters;
    private $calls;
    private $constructors;
    private $methodComments;
    
    public function __construct(
        MethodSignatureTokens $methodSignatureTokens,
        MethodBodyTokens $methodBodyTokens,
        Parameters $parameters,
        Calls $calls,
        Constructors $constructors,
        MethodComments $methodComments
    ) {
        $this->methodSignatureTokens = $methodSignatureTokens;
        $this->methodBodyTokens = $methodBodyTokens;
        $this->parameters = $parameters;
        $this->calls = $calls;
        $this->constructors = $constructors;
        $this->methodComments = $methodComments;
    }
    
    public function createConstructor(
        \ReflectionClass $class
    ): Constructor
    {
        $constructorReflection = $class->getconstructor();
        $className = $class->getShortName();

        if (is_null($constructorReflection)) {
            
            return $this->constructors->createEmptyConstructor(
                $className
            );
            
        } else {

            return $this->constructors->createParameterizedConstructor(
                $constructorReflection,
                $className
            );
            
        }
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