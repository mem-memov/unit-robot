<?php
namespace MemMemov\UnitRobot\Source\Reflection;

use MemMemov\UnitRobot\Source\Token\MethodSignature as SignatureTokens;

class Parameters
{
    public function createMethodParameters(
        array $parameterReflections,
        SignatureTokens $tokens
    ): MethodParameters
    {
        $parameters = [];
        
        foreach ($parameterReflections as $reflection) {
            $type = $tokens->getParameterType($reflection->getName());

            $parameters[] = new Parameter(
                $reflection,
                $tokens->getParameterType($reflection->getName())
            );
        }
        
        return new MethodParameters($parameters);
    }
}