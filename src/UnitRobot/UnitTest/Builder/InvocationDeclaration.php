<?php
namespace MemMemov\UnitRobot\UnitTest\Builder;

use MemMemov\UnitRobot\UnitTest\File\Text;

class InvocationDeclaration
{
    private $instance;
    private $method;
    private $parameters;
    
    public function __construct(
        string $instance,
        string $method,
        string $parameters
    ) {
        $this->instance = $instance;
        $this->method = $method;
        $this->parameters = $parameters;
    }
    
    public function append(Text $text) 
    {
        $text->appendLine($this->instance . '->' . $this->method . '(' . $this->parameters . ');', 2);
    }
}