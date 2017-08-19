<?php
namespace MemMemov\UnitRobot\Source\Description\Type;

use MemMemov\UnitRobot\Source\Description\Type\Collection\MixedArrayType;
use MemMemov\UnitRobot\Source\Description\Type\Collection\ObjectArrayType;
use MemMemov\UnitRobot\Source\Description\Type\Collection\ScalarArrayType;
use MemMemov\UnitRobot\Source\Description\Type\Scalar\BooleanType;
use MemMemov\UnitRobot\Source\Description\Type\Scalar\FloatType;
use MemMemov\UnitRobot\Source\Description\Type\Scalar\IntegerType;
use MemMemov\UnitRobot\Source\Description\Type\Scalar\StringType;

class Types
{
    public function createArrayType(): ArrayType
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
    
    public function createBooleanType(): BooleanType
    {
        return new BooleanType();
    }
    
    public function createFloatType(): FloatType
    {
        return new FloatType();
    }
    
    public function createStringType(): StringType
    {
        return new StringType();
    }
    
    public function createObjectType(
        string $namespace,
        string $class,
        string $alias
    ): ObjectType
    {
        return new ObjectType($namespace, $class, $alias);
    }
}