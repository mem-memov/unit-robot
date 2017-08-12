<?php
namespace MemMemov\UnitRobot\Source\Reflection;

use MemMemov\UnitRobot\Source\File\Text;
use MemMemov\UnitRobot\Source\Token\MethodSignatures as Tokens;
use MemMemov\UnitRobot\Source\Token\MethodSignature as SignatureTokens;

class MethodSignature
{
    private const METHOD_SIGNATURE_PATTERN = '/(.|\n)+?$/m';
    
    private $reflection;
    private $tokens;
    
    public function __construct(
        \ReflectionMethod $reflection,
        Tokens $tokens
    ) {
        $this->reflection = $reflection;
        $this->tokens = $tokens;
    }
    
    public function getTokens(Text $text): SignatureTokens
    {
        $startLine = $this->reflection->getStartLine(); // body start ){-case
        
        $methodText = $text->extract(0, $startLine);
        
        preg_match(self::METHOD_SIGNATURE_PATTERN, $methodText, $matches);
var_dump($matches);
        $methodSignature = trim($matches[0]);
echo 'SIGNATURE --> ' . $startLine . ' '. $methodSignature . "\n";
        $signatureTokens = $this->tokens->createMethodSignature($methodSignature);
        
        return $signatureTokens;
    }
}