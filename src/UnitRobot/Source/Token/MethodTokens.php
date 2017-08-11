<?php
namespace MemMemov\UnitRobot\Source\Token;

class MethodTokens
{
    private $tokens;
    
    public function __construct(
        array $tokens
    ) {
        $this->tokens = $tokens;
    }
}