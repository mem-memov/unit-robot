<?php
namespace MemMemov\UnitRobot\Source\Token;

class MethodSignature
{
    private $tokens;
    
    public function __construct(
        array $tokens
    ) {
        $this->tokens = $tokens;
    }
    
    public function getParameterType(string $parameterName): string
    {
        foreach ($this->tokens as $index => $token) {
            
            if ($token->hasVariable($parameterName)) {
                $type = $this->tokens[$index - 2];
                return $token->getString();
            } 
        }
        throw new \Exception('Parameter $' . $parameterName . ' missing');
    }    
}