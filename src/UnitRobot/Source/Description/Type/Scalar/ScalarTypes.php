<?php
namespace MemMemov\UnitRobot\Source\Description\Type\Scalar;

class ScalarTypes
{
    public function isScalarType(string $name): bool
    {
        return in_array($name, ['integer', 'int', 'float', 'string', 'boolean', 'bool']);
    }
    
    public function createScalarType(string $name): ScalarType
    {
        switch ($name) {
            case 'bool':
            case 'boolean':
                return new BooleanType();
            case 'float':
                return new FloatType();
            case 'int':
            case 'integer':
                return new IntegerType();
            case 'str':
            case 'string':
                return new StringType();
            default:
                throw new \Exception('Unknown scalar type: ' . $name);
        }
    }
}