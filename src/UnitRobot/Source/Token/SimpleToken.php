<?php
namespace MemMemov\UnitRobot\Source\Token;

class SimpleToken implements Token
{
    private $string;
    
    public function __construct(
        string $string
    ) {
        $this->string = $string;
    }
    
    public function hasVariable(string $value): bool
    {
        return false;
    }
    
    public function isWhitespace(): bool
    {
        return false;
    }
    
    public function isString(): bool
    {
        return false;
    }
    
    public function getString(): string
    {
        return $this->string;
    }
    
    public function toString(): string
    {
        return $this->string;
    }
}