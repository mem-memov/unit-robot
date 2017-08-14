<?php
namespace MemMemov\UnitRobot\Source\Reflection\Method;

use MemMemov\UnitRobot\Source\Reflection\Method\Call\Calls;
use MemMemov\UnitRobot\Source\Reflection\Method\Parameter\Parameters;
use MemMemov\UnitRobot\Source\File\Text;
use MemMemov\UnitRobot\UnitTest\UnitTest;

class Method
{
    private $reflection;
    private $className;
    private $methodSignature;
    private $methodBody;
    private $parameters;
    private $calls;
    
    public function __construct(
        \ReflectionMethod $reflection,
        string $className,
        MethodSignature $methodSignature,
        MethodBody $methodBody,
        Parameters $parameters,
        Calls $calls
    ) {
        $this->reflection = $reflection;
        $this->className = $className;
        $this->methodSignature = $methodSignature;
        $this->methodBody = $methodBody;
        $this->parameters = $parameters;
        $this->calls = $calls;
    }
    
    public function createTests(Text $text, UnitTest $unitTest): void
    {
        $startLine = $this->reflection->getStartLine();
        $endLine = $this->reflection->getEndLine();
        
        $methodString = $text->extract($startLine-1, $endLine);
        
        $calls = $this->calls->createMethodCalls($methodString);
        
        $signatureTokens = $this->methodSignature->getTokens($methodString);
        $parameterReflections = $this->reflection->getParameters();
       
        $parameters = $this->parameters->createMethodParameters(
            $parameterReflections,
            $signatureTokens
        );
        
        if ($this->reflection->isConstructor()) {
            $parameters->addPropertiesToUnitTest($unitTest);
        } else {
            $unitTest->addMethod(
                $this->reflection->getName(),
                $this->className,
                $parameters
            );
        }
    }
}