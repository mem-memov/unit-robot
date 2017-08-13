<?php
namespace MemMemov\UnitRobot\Source\Token;

interface Token
{
    public function hasVariable(string $value): bool;
    
    public function isTypePart(): bool;
    
    public function getString(): string;
    
    public function toString(): string;
}