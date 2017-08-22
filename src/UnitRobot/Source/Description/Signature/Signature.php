<?php
namespace MemMemov\UnitRobot\Source\Description\Signature;

use MemMemov\UnitRobot\Source\Description\Type\Type;
use MemMemov\UnitRobot\UnitTest\UnitTest;
use MemMemov\UnitRobot\Source\Description\Calls;

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
    
    public function createUnitTests(UnitTest $unitTest, string $shortClassName): void
    {
        $unitTest->addMethod(
            $this->method,
            $shortClassName,
            $this->parameters,
            new Calls()
        );
    }
}