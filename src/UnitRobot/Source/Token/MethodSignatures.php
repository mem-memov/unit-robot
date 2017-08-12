<?php
namespace MemMemov\UnitRobot\Source\Token;

class MethodSignatures
{
    private $tokens;
    
    public function __construct(
        Tokens $tokens
    ) {
        $this->tokens = $tokens;
    }
    
    public function createMethodSignature(string $methodSignature): MethodSignature
    {
        $tokens = $this->tokens->createTokens($methodSignature);

        return new MethodSignature($tokens);
    }
}