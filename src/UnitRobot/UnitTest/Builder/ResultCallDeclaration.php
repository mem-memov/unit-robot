<?php
namespace MemMemov\UnitRobot\UnitTest\Builder;

use MemMemov\UnitRobot\UnitTest\File\Text;

class ResultCallDeclaration implements CallDeclaration
{
    private $callVariable;
    private $method;
    private $resultVariable;
    
    public function __construct(
        string $callVariable,
        string $method,
        string $resultVariable
    ) {
        $this->callVariable = $callVariable;
        $this->method = $method;
        $this->resultVariable = $resultVariable;
    }
    
    public function appendExpectation(Text $text): void
    {
        $text->appendLine($this->callVariable . '->expects($this->once())', 2);
        $text->appendLine('->method(\'' . $this->method . '\')', 3);
        $text->appendLine('->willReturn(' . $this->resultVariable. ');', 3);
        $text->appendLine('');
    }
}