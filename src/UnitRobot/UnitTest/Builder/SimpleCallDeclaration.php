<?php
namespace MemMemov\UnitRobot\UnitTest\Builder;

use MemMemov\UnitRobot\UnitTest\File\Text;

class SimpleCallDeclaration implements CallDeclaration
{
    private $variable;
    private $method;
    
    public function __construct(
        string $variable,
        string $method
    ) {
        $this->variable = $variable;
        $this->method = $method;
    }
    
    public function appendExpectation(Text $text): void
    {
        $text->appendLine($this->variable . '->expects($this->once())', 2);
        $text->appendLine('->method(\'' . $this->method . '\');', 3);
        $text->appendLine('');
    }
}