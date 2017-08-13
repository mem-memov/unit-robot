<?php
namespace MemMemov\UnitRobot\Source\Reflection;

use MemMemov\UnitRobot\Source\File\Text;
use MemMemov\UnitRobot\Source\Token\MethodSignatures as Tokens;
use MemMemov\UnitRobot\Source\Token\MethodSignature as SignatureTokens;

class MethodSignature
{
    private $reflection;
    private $tokens;
    
    public function __construct(
        \ReflectionMethod $reflection,
        Tokens $tokens
    ) {
        $this->reflection = $reflection;
        $this->tokens = $tokens;
    }
    
    public function getTokens(string $methodString): SignatureTokens
    {
        $methodSignature = strstr($methodString, '{', true);

        $signatureTokens = $this->tokens->createMethodSignature($methodSignature);
        
        return $signatureTokens;
    }
}