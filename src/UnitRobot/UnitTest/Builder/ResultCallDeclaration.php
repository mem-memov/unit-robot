<?php
namespace MemMemov\UnitRobot\UnitTest\Builder;

use MemMemov\UnitRobot\UnitTest\File\Text;

class ResultCallDeclaration implements CallDeclaration
{
    private $callVariable;
    private $method;
    private $resultVariable;
    private $resultMock;
    
    public function __construct(
        string $callVariable,
        string $method,
        string $resultVariable,
        MockDeclaration $resultMock
    ) {
        $this->callVariable = $callVariable;
        $this->method = $method;
        $this->resultVariable = $resultVariable;
        $this->resultMock = $resultMock;
    }
    
    public function appendExpectation(Text $text): void
    {
        $this->resultMock->append($text);;
        $text->appendLine('');
        
        $text->appendLine($this->callVariable . '->expects($this->once())', 2);
        $text->appendLine('->method(\'' . $this->method . '\')', 3);
        $text->appendLine('->willReturn(' . $this->resultVariable. ');', 3);
        $text->appendLine('');
    }
}