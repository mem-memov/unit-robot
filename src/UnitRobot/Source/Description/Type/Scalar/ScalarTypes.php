<?php
namespace MemMemov\UnitRobot\Source\Description\Type\Scalar;

class ScalarTypes
{
    public function createBooleanType(): BooleanType
    {
        return new BooleanType();
    }
    
    public function createFloatType(): FloatType
    {
        return new FloatType();
    }
    
    public function createIntegerType(): IntegerType
    {
        return new IntegerType();
    }
    
    public function createStringType(): StringType
    {
        return new StringType();
    }
}