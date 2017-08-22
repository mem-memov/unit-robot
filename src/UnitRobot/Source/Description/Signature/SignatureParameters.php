<?php
namespace MemMemov\UnitRobot\Source\Description\Signature;

use MemMemov\UnitRobot\Source\Description\Parameter\Parameter;
use MemMemov\UnitRobot\UnitTest\MethodParameters as UnitTestMethodParameters;
use MemMemov\UnitRobot\UnitTest\Builder\Declarations as UnitTestDeclarations;
use MemMemov\UnitRobot\UnitTest\Builder\ParameterDeclarations as UnitTestParameterDeclarations;

class SignatureParameters implements UnitTestMethodParameters
{
    private $parameters;
    
    public function __construct() 
    {
        $this->parameters = [];
    }
    
    public function addParameter(Parameter $parameter): void
    {
        $this->parameters[] = $parameter;
    }
    
    public function fillUnitTestMethod(
        UnitTestDeclarations $declarations,
        UnitTestParameterDeclarations $parameterDeclarations
    ): void
    {
        foreach ($this->parameters as $parameter) {
            $parameter->fillUnitTestMethod(
                $declarations,
                $parameterDeclarations
            );
        }
    }
}