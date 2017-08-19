<?php
namespace MemMemov\UnitRobot\Source\Reflection\Parameter;

use MemMemov\UnitRobot\UnitTest\UnitTest;
use MemMemov\UnitRobot\UnitTest\MethodParameters as UnitTestMethodParameters;
use MemMemov\UnitRobot\UnitTest\Builder\Declarations as UnitTestDeclarations;
use MemMemov\UnitRobot\UnitTest\Builder\ParameterDeclarations as UnitTestParameterDeclarations;
use MemMemov\UnitRobot\Source\Description\Instance\InstanceProperties;
use MemMemov\UnitRobot\Source\Description\Instance\InstanceDependencies;
use MemMemov\UnitRobot\Source\Description\Property\Properties as DescriptionProperties;
use MemMemov\UnitRobot\Source\Description\Property\Property as DescriptionProperty;
use MemMemov\UnitRobot\Source\Description\Parameter\Parameters as DescriptionParameters;
use MemMemov\UnitRobot\Source\Description\Parameter\Parameter as DescriptionParameter;
use MemMemov\UnitRobot\Source\Reflection\Comment\ParameterComment;

class Parameter implements UnitTestMethodParameters
{
    private $reflection;
    private $type;
    private $descriptionProperties;
    private $descriptionParameters;
    private $comment;
    
    public function __construct(
        \ReflectionParameter $reflection,
        string $type,
        DescriptionProperties $descriptionProperties,
        DescriptionParameters $descriptionParameters,
        ParameterComment $comment
    ) {
        $this->reflection = $reflection;
        $this->type = $type;
        $this->descriptionProperties = $descriptionProperties;
        $this->descriptionParameters = $descriptionParameters;
        $this->comment = $comment;
    }
    
    public function addPropertyToUnitTest(UnitTest $unitTest): void
    {
        $unitTest->addProperty($this->type, $this->reflection->getName());
    }
    
    public function fillUnitTestMethod(
        UnitTestDeclarations $declarations,
        UnitTestParameterDeclarations $parameterDeclarations
    ): void
    {
        $parameterDeclaration = $declarations->createParameterDeclaration(
            $this->type,
            $this->reflection->getName()
        );
        
        $parameterDeclarations->addDeclaration($parameterDeclaration);
    }
    
    public function describeProperties(
        InstanceDependencies $instanceDependencies
    ): DescriptionProperty
    {
        if (!$this->reflection->hasType()) {
            throw new NoType(
                $this->reflection->getName(),
                $this->reflection->getDeclaringClass(),
                $this->reflection->getDeclaringFunction()
            );
        }
        
        if ($this->reflection->isArray()) {
            
            if ($this->comment->hasTypeForArray()) {
                
                $itemType = $this->comment->getTypeForArray(
                    $this->reflection->getName()
                );
                
                $isScalar = $this->descriptionProperties->isScalarType($itemType);
                
                if ($isScalar) {
                    
                    $property = $this->descriptionProperties->createScalarCollectionProperty(
                        $this->reflection->getName(),
                        $itemType
                    );
                    
                } else {
                    
                    if ($instanceDependencies->has($itemType)) {
                        $dependency = $instanceDependencies->get($itemType);
                        
                        $property = $dependency->createObjectCollectionProperty(
                            $this->reflection->getName(),
                            $this->descriptionProperties
                        );
                        
                    } else {
                        
                        $classReflection = new \ReflectionClass($itemType);
                        
                        $property = $this->descriptionProperties->createObjectCollectionProperty(
                            $this->reflection->getName(),
                            $classReflection->getNamespaceName(),
                            $classReflection->getShortName(),
                            ''
                        );
                        
                    }
                }
                
            } else {
                
                $property = $this->descriptionProperties->createArrayProperty(
                    $this->reflection->getName()
                );
                
            }
            
        } else {
            
            $type = $this->reflection->getType();
            
            $isScalar = $this->descriptionProperties->isScalarType($type);
            
            if ($isScalar) {
                
                $property = $this->descriptionProperties->createScalarProperty(
                    $this->reflection->getName(),
                    $type
                );
                
            } else {

                $classReflection = new \ReflectionClass($type);
                
                $property = $this->descriptionProperties->createObjectProperty(
                    $this->reflection->getName(),
                    $classReflection->getNamespaceName(),
                    $classReflection->getShortName(),
                    $this->type
                );
                
            }
        }
        
        return $property;
    }
    
    public function describeSignature(): DescriptionParameter
    {
        if (!$this->reflection->hasType()) {
            throw new NoType(
                $this->reflection->getName(),
                $this->reflection->getDeclaringClass(),
                $this->reflection->getDeclaringFunction()
            );
        }
        
        if ($this->reflection->isArray()) {
            
            if ($this->comment->hasTypeForArray()) {
                
                $itemType = $this->comment->getTypeForArray(
                    $this->reflection->getName()
                );
                
                $isScalar = $this->descriptionParameters->isScalarType($itemType);
                
                if ($isScalar) {
                    
                    $parameter = $this->descriptionParameters->createScalarCollectionParameter(
                        $this->reflection->getName(),
                        $itemType
                    );
                    
                } else {
                    
                    if ($instanceDependencies->has($itemType)) {
                        $dependency = $instanceDependencies->get($itemType);
                        
                        $parameter = $dependency->createObjectCollectionParameter(
                            $this->reflection->getName(),
                            $this->descriptionParameters
                        );
                        
                    } else {
                        
                        $classReflection = new \ReflectionClass($itemType);
                        
                        $parameter = $this->descriptionParameters->createObjectCollectionParameter(
                            $this->reflection->getName(),
                            $classReflection->getNamespaceName(),
                            $classReflection->getShortName(),
                            ''
                        );
                        
                    }
                }
                
            } else {
                
                $parameter = $this->descriptionParameters->createArrayParameter(
                    $this->reflection->getName()
                );
                
            }
            
        } else {
            
            $type = $this->reflection->getType();
            
            $isScalar = $this->descriptionParameters->isScalarType($type);
            
            if ($isScalar) {
                
                $parameter = $this->descriptionParameters->createScalarParameter(
                    $this->reflection->getName(),
                    $type
                );
                
            } else {

                $classReflection = new \ReflectionClass($type);
                
                $parameter = $this->descriptionParameters->createObjectParameter(
                    $this->reflection->getName(),
                    $classReflection->getNamespaceName(),
                    $classReflection->getShortName(),
                    $this->type
                );
                
            }
        }
        
        return $parameter;
    }
}