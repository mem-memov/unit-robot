<?php
namespace MemMemov\UnitRobot\Source\Reflection\Constructor;

use MemMemov\UnitRobot\Source\Reflection\Method\MethodSignature;
use MemMemov\UnitRobot\Source\Reflection\Method\Parameter\Parameters;
use MemMemov\UnitRobot\Source\File\Text;
use MemMemov\UnitRobot\UnitTest\UnitTest;
use MemMemov\UnitRobot\Source\Description\InstanceProperties;
use MemMemov\UnitRobot\Source\Reflection\Method\MethodComments;
use MemMemov\UnitRobot\Source\Description\InstanceDependencies;

class ParameterizedConstructor implements Constructor
{
    private $reflection;
    private $className;
    private $methodSignature;
    private $parameters;
    private $methodComments;
    
    public function __construct(
        \ReflectionMethod $reflection,
        string $className,
        MethodSignature $methodSignature,
        Parameters $parameters,
        MethodComments $methodComments
    ) {
        $this->reflection = $reflection;
        $this->className = $className;
        $this->methodSignature = $methodSignature;
        $this->parameters = $parameters;
        $this->methodComments = $methodComments;
    }
    
    public function createTest(Text $text, UnitTest $unitTest): void
    {
        $startLine = $this->reflection->getStartLine();
        $endLine = $this->reflection->getEndLine();
        
        $methodString = $text->extract($startLine-1, $endLine);

        $signatureTokens = $this->methodSignature->getTokens($methodString);
        $parameterReflections = $this->reflection->getParameters();
        $methodComment = $this->methodComments->createMethodComment(
            $this->reflection->getDocComment()
        );
        
        
        $parameters = $this->parameters->createMethodParameters(
            $parameterReflections,
            $signatureTokens,
            $methodComment,
            new InstanceDependencies()
        );
        
        $parameters->addPropertiesToUnitTest($unitTest);
    }
    
    public function describeProperties(
        Text $text,
        InstanceDependencies $dependencies,
        InstanceProperties $properties
    ): void
    {
        $startLine = $this->reflection->getStartLine();
        $endLine = $this->reflection->getEndLine();
        
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
        
        $parameters->describeProperties($properties, $dependencies);
    }
}