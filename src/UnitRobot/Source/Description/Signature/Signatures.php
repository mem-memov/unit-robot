<?php
namespace MemMemov\UnitRobot\Source\Description\Signature;

use MemMemov\UnitRobot\Source\Description\Type\Type;

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
    
    public function createSignatureParameters(): SignatureParameters
    {
        return new SignatureParameters();
    }
}