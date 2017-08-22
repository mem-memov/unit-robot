<?php
namespace MemMemov\UnitRobot\Source\Reflection\Method;

use MemMemov\UnitRobot\Source\Reflection\Method\Call\Calls;
use MemMemov\UnitRobot\Source\Reflection\Parameter\Parameters;
use MemMemov\UnitRobot\Source\File\Text;
use MemMemov\UnitRobot\UnitTest\UnitTest;
use MemMemov\UnitRobot\Source\Reflection\Comment\MethodComments;
use MemMemov\UnitRobot\Source\Description\Instance\InstanceDependencies;
use MemMemov\UnitRobot\Source\Description\Signature\Signatures;
use MemMemov\UnitRobot\Source\Description\Signature\Signature;
use MemMemov\UnitRobot\Source\Description\Type\Types;

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
    private $types;
    
    public function __construct(
        \ReflectionMethod $reflection,
        string $className,
        MethodSignature $methodSignature,
        MethodBody $methodBody,
        Parameters $parameters,
        Calls $calls,
        MethodComments $methodComments,
        Signatures $signatures,
        Types $types
    ) {
        $this->reflection = $reflection;
        $this->className = $className;
        $this->methodSignature = $methodSignature;
        $this->methodBody = $methodBody;
        $this->parameters = $parameters;
        $this->calls = $calls;
        $this->methodComments = $methodComments;
        $this->signatures = $signatures;
        $this->types = $types;
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
        
        if ('void' === $type) {
            $returnType = $this->types->createVoidType();
        } elseif ('array' === $type) {
            
            if ($methodComment->hasReturnItemType()) {
                
                $itemType = $this->comment->getReturnItemType();
                
                $isScalar = $this->types->isScalarType($itemType);
                
                if ($isScalar) {
                    
                    $returnType = $this->types->createScalarArrayType($itemType);
                    
                } else {
                    if ($instanceDependencies->has($itemType)) {
                        
                        $dependency = $instanceDependencies->get($itemType);
                        
                        $returnType = $dependency->createObjectArrayType($type);
                        
                    } else {
                        $classReflection = new \ReflectionClass($itemType);
                        
                        $returnType = $this->types->createObjectArrayType(
                            $classReflection->getNamespaceName(),
                            $classReflection->getShortName(),
                            ''
                        );
                    }
                }
                
            } else {
                $returnType = $this->types->createArrayType();
            }
            
        } else {
            
            $isScalar = $this->types->isScalarType($type);
            
            if ($isScalar) {
                
                $returnType = $this->types->createScalarType($type);
                
            } else {
                
                $classReflection = new \ReflectionClass($type);
                
                $returnType = $this->types->createObjectType(
                    $classReflection->getNamespaceName(),
                    $classReflection->getShortName(),
                    $type
                );
                
            }
        }
        
        //$calls = $this->calls->createMethodCalls($methodString);
        
        $signature = $this->signatures->createSignature(
            $this->reflection->getName(),
            $parameters,
            $returnType
        );
        
        return $signature;
    }
}