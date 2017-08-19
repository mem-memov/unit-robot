<?php
namespace MemMemov\UnitRobot\Source\Description\Signature;

use MemMemov\UnitRobot\Source\Description\Type\Type;

class Signature
{
    private $method;
    private $parameters;
    private $returnType;
    
    public function __construct(
        string $method,
        SignatureParameters $parameters,
        Type $returnType
    ) {
        $this->method = $method;
        $this->parameters = $parameters;
        $this->returnType = $returnType;
    }
    
}