<?php
namespace MemMemov\UnitRobot\Source\Reflection\Constructor;

use MemMemov\UnitRobot\Source\Reflection\Method\MethodSignature;
use MemMemov\UnitRobot\Source\Reflection\Parameter\Parameters;
use MemMemov\UnitRobot\Source\File\Text;
use MemMemov\UnitRobot\UnitTest\UnitTest;
use MemMemov\UnitRobot\Source\Description\Instance\InstanceProperties;
use MemMemov\UnitRobot\Source\Description\Instance\InstanceDependencies;
use MemMemov\UnitRobot\Source\Reflection\Comment\MethodComments;

class ParameterizedConstructor implements Constructor
{
    private $reflection;
    private $methodSignature;
    private $parameters;
    private $methodComments;
    
    public function __construct(
        \ReflectionMethod $reflection,
        MethodSignature $methodSignature,
        Parameters $parameters,
        MethodComments $methodComments
    ) {
        $this->reflection = $reflection;
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
        InstanceDependencies $dependencies
    ): InstanceProperties
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
        
        $instanceProperties = $parameters->describeProperties($dependencies);
        
        return $instanceProperties;
    }
}