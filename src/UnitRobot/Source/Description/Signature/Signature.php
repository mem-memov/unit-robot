<?php
namespace MemMemov\UnitRobot\Source\Description\Signature;

use MemMemov\UnitRobot\Source\Description\Type\Type;
use MemMemov\UnitRobot\UnitTest\UnitTest;

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
    
    public function createUnitTests(UnitTest $unitTest): void
    {
        /*
        $unitTest->addMethod(
            $this->method,
            $this->className,
            $parameters,
            $calls
        );
        */
    }
}