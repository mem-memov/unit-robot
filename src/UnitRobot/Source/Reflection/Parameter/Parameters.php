<?php
namespace MemMemov\UnitRobot\Source\Reflection\Parameter;

use MemMemov\UnitRobot\Source\Token\MethodSignature as SignatureTokens;
use MemMemov\UnitRobot\Source\Description\Property\Properties as DescriptionProperties;
use MemMemov\UnitRobot\Source\Description\Parameter\Parameters as DescriptionParameters;
use MemMemov\UnitRobot\Source\Reflection\Comment\MethodComment;
use MemMemov\UnitRobot\Source\Reflection\Comment\ParameterComment;
use MemMemov\UnitRobot\Source\Description\Instance\Instancies;
use MemMemov\UnitRobot\Source\Description\Signature\Signatures;

class Parameters
{
    private $descriptionProperties;
    private $descriptionParameters;
    private $instances;
    private $signatures;
    
    public function __construct(
        DescriptionProperties $descriptionProperties,
        DescriptionParameters $descriptionParameters,
        Instancies $instances,
        Signatures $signatures
    ) {
        $this->descriptionProperties = $descriptionProperties;
        $this->descriptionParameters = $descriptionParameters;
        $this->instances = $instances;
        $this->signatures = $signatures;
    }
    
    public function createMethodParameters(
        array $parameterReflections,
        SignatureTokens $tokens,
        MethodComment $methodComment
    ): MethodParameters
    {
        $parameters = [];
        
        foreach ($parameterReflections as $reflection) {
            $type = $tokens->getParameterType($reflection->getName());

            $parameters[] = new Parameter(
                $reflection,
                $tokens->getParameterType($reflection->getName()),
                $this->descriptionProperties,
                $this->descriptionParameters,
                new ParameterComment(
                    $methodComment->getParameterComment($reflection->getName())
                )
            );
        }
        
        return new MethodParameters(
            $parameters,
            $this->instances,
            $this->signatures
        );
    }
}