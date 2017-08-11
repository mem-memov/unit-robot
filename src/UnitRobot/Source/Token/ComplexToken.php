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
}