<?php
namespace MemMemov\UnitRobot\Source\Description\Type\Collection;

class MixedArrayType implements ArrayType
{
    public function getForSignature(): string
    {
        return 'array';
    }
}