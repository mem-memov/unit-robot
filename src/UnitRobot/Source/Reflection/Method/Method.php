<?php
namespace MemMemov\UnitRobot\Source\Reflection\Method;

use MemMemov\UnitRobot\Source\Reflection\Method\Call\Calls;
use MemMemov\UnitRobot\Source\Reflection\Parameter\Parameters;
use MemMemov\UnitRobot\Source\File\Text;
use MemMemov\UnitRobot\UnitTest\UnitTest;
use MemMemov\UnitRobot\Source\Reflection\Comment\MethodComments;
use MemMemov\UnitRobot\Source\Description\InstanceDependencies;
use MemMemov\UnitRobot\Source\Description\Signature\Signatures;

class Method
{
    private $reflection;
    private $className;
    private $methodSignature;
    private $methodBody;
    private $parameters;
    private $calls;
    private $methodComments;
    private $signatures;
    
    public function __construct(
        \ReflectionMethod $reflection,
        string $className,
        MethodSignature $methodSignature,
        MethodBody $methodBody,
        Parameters $parameters,
        Calls $calls,
        MethodComments $methodComments,
        Signatures $signatures
    ) {
        $this->reflection = $reflection;
        $this->className = $className;
        $this->methodSignature = $methodSignature;
        $this->methodBody = $methodBody;
        $this->parameters = $parameters;
        $this->calls = $calls;
        $this->methodComments = $methodComments;
        $this->signatures = $signatures;
    }
    
    public function createTest(Text $text, UnitTest $unitTest): void
    {
        $startLine = $this->reflection->getStartLine();
        $endLine = $this->reflection->getEndLine();
        
        if ($startLine <= 1 || $endLine <= 1) {
            return; // __wakeup in \Exception
        }
        
        $methodString = $text->extract($startLine-1, $endLine);

        $signatureTokens = $this->methodSignature->getTokens($methodString);
        $parameterReflections = $this->reflection->getParameters();
        $methodComment = $this->methodComments->createMethodComment(
            $this->reflection->getDocComment()
        );
        
        $parameters = $this->parameters->createMethodParameters(
            $parameterReflections,
            $signatureTokens,
            $methodComment
        );
        

        $calls = $this->calls->createMethodCalls($methodString);
        $unitTest->addMethod(
            $this->reflection->getName(),
            $this->className,
            $parameters,
            $calls
        );
    }
    
    public function describeSignature(): Signature
    {
        $startLine = $this->reflection->getStartLine();
        $endLine = $this->reflection->getEndLine();

        $methodString = $text->extract($startLine-1, $endLine);

        $signatureTokens = $this->methodSignature->getTokens($methodString);
        $parameterReflections = $this->reflection->getParameters();
        $methodComment = $this->methodComments->createMethodComment(
            $this->reflection->getDocComment()
        );
        
        $methodParameters = $this->parameters->createMethodParameters(
            $parameterReflections,
            $signatureTokens,
            $methodComment
        );
        
        $parameters = $methodParameters->describe();
        
        $signature = $this->signatures->createSignature(
            $this->reflection->getName(),
            $parameters,
            $returnType
        );
    }
}