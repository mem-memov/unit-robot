<?php
namespace MemMemov\UnitRobot\Source\Reflection\Parameter;

use MemMemov\UnitRobot\UnitTest\UnitTest;
use MemMemov\UnitRobot\UnitTest\MethodParameters as UnitTestMethodParameters;
use MemMemov\UnitRobot\UnitTest\Builder\Declarations as UnitTestDeclarations;
use MemMemov\UnitRobot\UnitTest\Builder\ParameterDeclarations as UnitTestParameterDeclarations;
use MemMemov\UnitRobot\Source\Description\Instance\InstanceProperties;
use MemMemov\UnitRobot\Source\Description\Instance\InstanceParameters;
use MemMemov\UnitRobot\Source\Description\Instance\InstanceDependencies;
use MemMemov\UnitRobot\Source\Description\Instance\Instancies;
use MemMemov\UnitRobot\Source\Description\Signature\Signatures;
use MemMemov\UnitRobot\Source\Description\Signature\SignatureParameters;

class MethodParameters implements UnitTestMethodParameters
{
    private $parameters;
    private $instances;
    private $signatures;
    
    public function __construct(
        array $parameters,
        Instancies $instances,
        Signatures $signatures
    ) {
        $this->parameters = $parameters;
        $this->instances = $instances;
        $this->signatures = $signatures;
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
        InstanceDependencies $instanceDependencies
    ): InstanceProperties
    {
        $instanceProperties = $this->instances->createInstanceProperties();
        
        foreach ($this->parameters as $parameter) {
            
            $instanceProperty = $parameter->describeProperties(
                $instanceDependencies
            );
            
            $instanceProperties->addProperty($instanceProperty);
        }
        
        return $instanceProperties;
    }
    
    public function describeParameters(
        InstanceDependencies $instanceDependencies
    ): SignatureParameters
    {
        $signatureParameters = $this->signatures->createSignatureParameters();
        
        foreach ($this->parameters as $parameter) {
            $signatureParameter = $parameter->describeSignature();
            $signatureParameters->addParameter($signatureParameter);
        }
        
        return $signatureParameters;
    }
}