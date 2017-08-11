<?php
namespace MemMemov\UnitRobot\Source\Reflection;

use MemMemov\UnitRobot\Source\File\Text;
use MemMemov\UnitRobot\Source\Token\Tokens;

class Method
{
    private const METHOD_BODY_PATTERN = '/(?<={)(.|\n)*(?=})/m';
    
    private $reflection;
    private $tokens;
    
    public function __construct(
        \ReflectionMethod $reflection,
        Tokens $tokens
    ) {
        $this->reflection = $reflection;
        $this->tokens = $tokens;
    }
    
    public function createTests(Text $text)
    {
        $startLine = $this->reflection->getStartLine() - 1;
        $endLine = $this->reflection->getEndLine();
        
        $methodText = $text->extract($startLine, $endLine);
        
        preg_match(self::METHOD_BODY_PATTERN, $methodText, $matches);

        $methodBody = $matches[0];

        $methodTokens = $this->tokens->createMethodTokens($methodBody);
    }
}