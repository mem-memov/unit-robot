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
}