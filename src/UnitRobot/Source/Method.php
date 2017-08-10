<?php
namespace MemMemov\UnitRobot\Source;

class Method
{
    private $reflection;
    
    public function __construct(
        \ReflectionMethod $reflection
    ) {
        $this->reflection = $reflection;
    }
    
    public function createTests(Text $text)
    {
        $startLine = $this->reflection->getStartLine();
        $endLine = $this->reflection->getEndLine();
        
        $methodText = $text->extract($startLine, $endLine);
        
        var_dump($methodText);
    }
}