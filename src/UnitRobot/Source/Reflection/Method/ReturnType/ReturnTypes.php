<?php
namespace MemMemov\UnitRobot\Source\Reflection\Method\ReturnType;

use MemMemov\UnitRobot\Source\Description\Type\Type;
use MemMemov\UnitRobot\Source\Description\Type\Types;
use MemMemov\UnitRobot\Source\Reflection\Comment\MethodComment;

class ReturnTypes
{
    private $types;
    
    public function __construct(
        Types $types
    ) {
        $this->types = $types;
    }
    
    public function createReturnType(string $type, MethodComment $methodComment): Type
    {
        if ('void' === $type) {
            $returnType = $this->types->createVoidType();
        } elseif ('array' === $type) {
            
            if ($methodComment->hasReturnItemType()) {
                
                $itemType = $methodComment->getReturnItemType();
                
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
        
        return $returnType;
    }
}