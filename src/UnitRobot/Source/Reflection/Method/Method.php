<?php
namespace MemMemov\UnitRobot\Source\Reflection\Method;

use MemMemov\UnitRobot\Source\Reflection\Method\Call\Calls;
use MemMemov\UnitRobot\Source\Reflection\Parameter\Parameters;
use MemMemov\UnitRobot\Source\File\Text;
use MemMemov\UnitRobot\UnitTest\UnitTest;
use MemMemov\UnitRobot\Source\Reflection\Comment\MethodComments;
use MemMemov\UnitRobot\Source\Reflection\Method\ReturnType\ReturnTypes;
use MemMemov\UnitRobot\Source\Description\Instance\InstanceDependencies;
use MemMemov\UnitRobot\Source\Description\Signature\Signatures;
use MemMemov\UnitRobot\Source\Description\Signature\Signature;

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
    private $returnTypes;
    
    public function __construct(
        \ReflectionMethod $reflection,
        string $className,
        MethodSignature $methodSignature,
        MethodBody $methodBody,
        Parameters $parameters,
        Calls $calls,
        MethodComments $methodComments,
        Signatures $signatures,
        ReturnTypes $returnTypes
    ) {
        $this->reflection = $reflection;
        $this->className = $className;
        $this->methodSignature = $methodSignature;
        $this->methodBody = $methodBody;
        $this->parameters = $parameters;
        $this->calls = $calls;
        $this->methodComments = $methodComments;
        $this->signatures = $signatures;
        $this->returnTypes = $returnTypes;
    }

    public function describeSignature(
        Text $text,
        InstanceDependencies $instanceDependencies
    ): Signature
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
        
        $parameters = $methodParameters->describeParameters($instanceDependencies);
        
        if ( ! $this->reflection->hasReturnType()) {
            throw new NoType(
                $this->reflection->getName(),
                $this->reflection->getDeclaringClass()
            );
        }
        
        $type = (string)$this->reflection->getReturnType();
        
        $returnType = $this->returnTypes->createReturnType($type, $methodComment);
        
        //$calls = $this->calls->createMethodCalls($methodString);
        
        $signature = $this->signatures->createSignature(
            $this->reflection->getName(),
            $parameters,
            $returnType
        );
        
        return $signature;
    }
}