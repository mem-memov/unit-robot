<?php
namespace MemMemov\UnitRobot\Source\Description\Signature;

class Signatures
{
    public function createSignature(
        string $method,
        SignatureParameters $parameters,
        Type $returnType
    ): Signature
    {
        return new Signature(
            $method,
            $parameters,
            $returnType
        );
    }
}