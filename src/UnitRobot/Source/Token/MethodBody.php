<?php
namespace MemMemov\UnitRobot\Source\Token;

class MethodBody
{
    private $tokens;
    
    public function __construct(
        array $tokens
    ) {
        $this->tokens = $tokens;
    } 
}