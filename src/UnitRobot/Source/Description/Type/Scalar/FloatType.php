<?php
namespace MemMemov\UnitRobot\Source\Description\Type\Scalar;

class FloatType implements ScalarType
{
    public function getForSignature(): string
    {
        return 'float';
    }
}