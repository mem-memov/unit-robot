<?php
namespace MemMemov\UnitRobot\Source\Description\Type\Scalar;

class StringType implements ScalarType
{
    public function getForSignature(): string
    {
        return 'string';
    }
}