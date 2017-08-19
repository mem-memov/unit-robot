<?php
namespace MemMemov\UnitRobot\Source\Description\Type;

use MemMemov\UnitRobot\Source\Description\Type\Collection\MixedArrayType;
use MemMemov\UnitRobot\Source\Description\Type\Collection\ObjectArrayType;
use MemMemov\UnitRobot\Source\Description\Type\Collection\ScalarArrayType;
use MemMemov\UnitRobot\Source\Description\Type\Scalar\ScalarType;
use MemMemov\UnitRobot\Source\Description\Type\Scalar\ScalarTypes;

class Types
{
    private $scalarTypes;
    
    public function __construct(
        ScalarTypes $scalarTypes
    ) {
        $this->scalarTypes = $scalarTypes;
    }
    
    public function createArrayType(): MixedArrayType
    {
        return new MixedArrayType();
    }
    
    public function createObjectArrayType(ObjectType $itemType): ObjectArrayType
    {
        return new ObjectArrayType($itemType);
    }
    
    public function createScalarArrayType(ScalarType $itemType): ScalarArrayType
    {
        return new ScalarArrayType($itemType);
    }
    
    public function isScalarType(string $name): bool
    {
        return $this->scalarTypes->isScalarType($name);
    }

    public function createScalarType(string $name): ScalarType
    {
        return $this->scalarTypes->createScalarType($name);
    }
    
    public function createObjectType(
        string $namespace,
        string $class,
        string $alias
    ): ObjectType
    {
        return new ObjectType($namespace, $class, $alias);
    }
    
    public function createVoidType(): VoidType
    {
        return new VoidType();
    }
}