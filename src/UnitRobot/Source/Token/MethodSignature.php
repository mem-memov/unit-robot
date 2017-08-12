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
            //echo 'f ' .$token->toString() ."\n";
            if ($token->hasVariable($parameterName)) {
                $type = null;
                for ($reverse = $index-1; $reverse > 0; $reverse--) {
                    $reverseToken = $this->tokens[$reverse];
                    //echo 'r ' .$reverseToken->toString() ."\n";
                    if ($reverseToken->isWhitespace()) {
                        continue;
                    } elseif ($reverseToken->isString()) {
                        $type = $reverseToken->getString();
                        break;
                    } else {
                        throw new \Exception('Unexpected token ' . $reverseToken->toString());
                    }
                }
                if (is_null($type)) {
                    throw new \Exception('Type not found for parameter $' . $parameterName);
                }
                
                return $token->getString();
            } 
        }
        throw new \Exception('Parameter $' . $parameterName . ' missing');
    }    
}