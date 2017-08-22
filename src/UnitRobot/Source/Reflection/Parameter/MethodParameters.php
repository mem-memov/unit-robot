<?php
namespace MemMemov\UnitRobot\Source\Reflection\Parameter;

use MemMemov\UnitRobot\Source\Description\Instance\InstanceProperties;
use MemMemov\UnitRobot\Source\Description\Instance\InstanceParameters;
use MemMemov\UnitRobot\Source\Description\Instance\InstanceDependencies;
use MemMemov\UnitRobot\Source\Description\Instance\Instancies;
use MemMemov\UnitRobot\Source\Description\Signature\Signatures;
use MemMemov\UnitRobot\Source\Description\Signature\SignatureParameters;

class MethodParameters
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