<?php
namespace MemMemov\UnitRobot\Source\Token;

class MethodSignature
{
    private $tokens;
    
    public function __construct(
        array $tokens
    ) {
        $this->tokens = $tokens;
    }
    
    public function getParameterType(string $parameterName): string
    {
        foreach ($this->tokens as $index => $token) {
            
            if ($token->hasVariable($parameterName)) {
                $type = '';
                for ($revert = $index-2; $revert > 0; $revert--) {
                    $typePart = $this->tokens[$revert];
                    if (!$typePart->isTypePart()) {
                        return $type;
                    }
                    $type = $typePart->getString() . $type;
                }
                
            } 
        }
        throw new \Exception('Parameter $' . $parameterName . ' missing');
    }    
}