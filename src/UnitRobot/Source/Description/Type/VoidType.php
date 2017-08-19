<?php
namespace MemMemov\UnitRobot\Source\Description\Type;

class VoidType implements Type
{
    public function getForSignature(): string
    {
        return 'void';
    }
}