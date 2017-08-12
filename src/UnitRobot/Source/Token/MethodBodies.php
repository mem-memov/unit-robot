<?php
namespace MemMemov\UnitRobot\Source\Token;

class MethodBodies
{
    private $tokens;
    
    public function __construct(
        Tokens $tokens
    ) {
        $this->tokens = $tokens;
    }
    
    public function createMethodBody(string $methodBody): MethodBody
    {
        $tokens = $this->tokens->createTokens($methodBody);
        
        return new MethodBody($tokens);
    }
}