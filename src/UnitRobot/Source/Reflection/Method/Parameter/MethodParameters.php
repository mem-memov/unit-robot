<?php
namespace MemMemov\UnitRobot\Source\Reflection\Method\Parameter;

use MemMemov\UnitRobot\UnitTest\UnitTest;
use MemMemov\UnitRobot\UnitTest\MethodParameters as UnitTestMethodParameters;
use MemMemov\UnitRobot\UnitTest\Builder\Declarations as UnitTestDeclarations;
use MemMemov\UnitRobot\UnitTest\Builder\ParameterDeclarations as UnitTestParameterDeclarations;
use MemMemov\UnitRobot\Source\Description\InstanceProperties;

class MethodParameters implements UnitTestMethodParameters
{
    private $parameters;
    
    public function __construct(
        array $parameters
    ) {
        $this->parameters = $parameters;
    }
    
    public function addPropertiesToUnitTest(UnitTest $unitTest): void
    {
        foreach ($this->parameters as $parameter) {
            $parameter->addPropertyToUnitTest($unitTest);
        }
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
    
    public function describeProperties(
        InstanceProperties $properties
    ): void
    {
        foreach ($this->parameters as $parameter) {
            $parameter->describeProperties($properties);
        }
    }
}