<?php
namespace MemMemov\UnitRobot\Source\Reflection\Parameter;

use MemMemov\UnitRobot\UnitTest\UnitTest;
use MemMemov\UnitRobot\UnitTest\MethodParameters as UnitTestMethodParameters;
use MemMemov\UnitRobot\UnitTest\Builder\Declarations as UnitTestDeclarations;
use MemMemov\UnitRobot\UnitTest\Builder\ParameterDeclarations as UnitTestParameterDeclarations;
use MemMemov\UnitRobot\Source\Description\InstanceProperties;
use MemMemov\UnitRobot\Source\Description\InstanceDependencies;
use MemMemov\UnitRobot\Source\Description\Property\Properties as DescriptionProperties;
use MemMemov\UnitRobot\Source\Reflection\Comment\ParameterComment;

class Parameter implements UnitTestMethodParameters
{
    private $reflection;
    private $type;
    private $descriptionProperties;
    private $comment;
    
    public function __construct(
        \ReflectionParameter $reflection,
        string $type,
        DescriptionProperties $descriptionProperties,
        ParameterComment $comment
    ) {
        $this->reflection = $reflection;
        $this->type = $type;
        $this->descriptionProperties = $descriptionProperties;
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
        InstanceProperties $properties,
        InstanceDependencies $instanceDependencies
    ): void
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
                        
                        $property = $this->descriptionProperties->createObjectCollectionProperty(
                            $this->reflection->getName(),
                            $itemType,
                            $itemType,
                            $itemType
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

                $lastSlashPosition = strrpos($type, '\\');

                if (false === $lastSlashPosition) {
                    $namespace = '';
                    $className = $type;
                } else {
                    $namespace = substr($type, 0, $lastSlashPosition);
                    $className = substr($type, $lastSlashPosition + 1);
                }
                
                $property = $this->descriptionProperties->createObjectProperty(
                    $this->reflection->getName(),
                    $namespace,
                    $className,
                    $this->type
                );
                
            }
        }
        
        $properties->addProperty($property);
    }
}