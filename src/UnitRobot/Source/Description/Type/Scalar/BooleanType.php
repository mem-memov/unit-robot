<?php
namespace MemMemov\UnitRobot\Source\Description\Type\Scalar;

class BooleanType implements ScalarType
{
    public function getForSignature(): string
    {
        return 'bool';
    }
}