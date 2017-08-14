<?php
namespace MemMemov\UnitRobot\Source\Reflection\Method;

use MemMemov\UnitRobot\Source\File\Text;
use MemMemov\UnitRobot\Source\Token\MethodBodies as Tokens;
use MemMemov\UnitRobot\Source\Token\MethodBody as BodyTokens;

class MethodBody
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
    
    public function getTokens(Text $text): BodyTokens
    {
        $startLine = $this->reflection->getStartLine();
        $endLine = $this->reflection->getEndLine();
        
        $methodText = $text->extract($startLine, $endLine);

        preg_match(self::METHOD_BODY_PATTERN, $methodText, $matches);

        $methodBody = $matches[0];

        $bodyTokens = $this->tokens->createMethodBody($methodBody);
        
        return $bodyTokens;
    }
}