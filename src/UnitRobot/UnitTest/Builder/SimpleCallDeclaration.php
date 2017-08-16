<?php
namespace MemMemov\UnitRobot\UnitTest\Builder;

use MemMemov\UnitRobot\UnitTest\File\Text;

class SimpleCallDeclaration implements CallDeclaration
{
    private $variableName;
    private $methodName;
    
    public function __construct(
        string $variableName,
        string $methodName
    ) {
        $this->variableName = $variableName;
        $this->methodName = $methodName;
    }
    
    public function appendExpectation(Text $text): void
    {
        $text->appendLine($this->variableName . '->expects($this->once())', 2);
        $text->appendLine('->method(' . $this->methodName . ');', 3);
    }
}