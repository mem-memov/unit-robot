<?php
namespace MemMemov\UnitRobot\Source\Reflection\Parameter;

use MemMemov\UnitRobot\Source\Token\MethodSignature as SignatureTokens;
use MemMemov\UnitRobot\Source\Description\Property\Properties as DescriptionProperties;
use MemMemov\UnitRobot\Source\Reflection\Method\MethodComment;

class Parameters
{
    private $descriptionProperties;
    
    public function __construct(
        DescriptionProperties $descriptionProperties
    ) {
        $this->descriptionProperties = $descriptionProperties;
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
                new ParameterComment(
                    $methodComment->getParameterComment($reflection->getName())
                )
            );
        }
        
        return new MethodParameters($parameters);
    }
}