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
    
    public function isTypePart(): bool
    {
        return in_array($this->name, ['T_NS_SEPARATOR', 'T_STRING', 'T_ARRAY']);;
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