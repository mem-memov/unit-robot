<?php
namespace MemMemov\UnitRobot\Source\Description\Type\Scalar;

class IntegerType implements ScalarType
{
    public function getForSignature(): string
    {
        return 'int';
    }
}