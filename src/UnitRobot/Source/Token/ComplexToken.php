<?php
namespace MemMemov\UnitRobot\Source\Token;

class ComplexToken implements Token
{
    private $code;
    private $name;
    private $string;
    private $line;
    
    public function __construct(
        int $code,
        string $name,
        string $string,
        int $line
    ) {
        $this->code = $code;
        $this->name = $name;
        $this->string = $string;
        $this->line = $line;
    }
    
    public function hasVariable(string $value): bool
    {
        return $this->string === '$' . $value && 'T_VARIABLE' === $this->name;
    }
    
    public function isWhitespace(): bool
    {
        return 'T_WHITESPACE' === $this->name;
    }
    
    public function isString(): bool
    {
        return 'T_STRING' === $this->name;
    }
    
    public function getString(): string
    {
        return $this->string;
    }

    public function toString(): string
    {
        return $this->name. ':' . $this->string;
    }
}