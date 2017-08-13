<?php
namespace MemMemov\UnitRobot\Source\Reflection;

use MemMemov\UnitRobot\Source\File\Text;
use MemMemov\UnitRobot\UnitTest\UnitTest;

class Method
{
    private $reflection;
    private $className;
    private $methodSignature;
    private $methodBody;
    private $parameters;
    
    public function __construct(
        \ReflectionMethod $reflection,
        string $className,
        MethodSignature $methodSignature,
        MethodBody $methodBody,
        Parameters $parameters
    ) {
        $this->reflection = $reflection;
        $this->className = $className;
        $this->methodSignature = $methodSignature;
        $this->methodBody = $methodBody;
        $this->parameters = $parameters;
    }
    
    public function createTests(Text $text, UnitTest $unitTest): void
    {
        $startLine = $this->reflection->getStartLine();
        $endLine = $this->reflection->getEndLine();
        
        $methodString = $text->extract($startLine-1, $endLine);
        
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
                $this->className
            );
        }
    }
}