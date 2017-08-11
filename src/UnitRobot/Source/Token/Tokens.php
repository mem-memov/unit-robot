<?php
namespace MemMemov\UnitRobot\Source\Token;

class Tokens
{
    public function createMethodTokens(string $methodBody): MethodTokens
    {
        $tokens = token_get_all('<?php ' . $methodBody . '?>');
        
        $objects = [];
        foreach ($tokens as $token) {
            if (is_string($token)) {
                $objects[] = new SimpleToken($token);
            } else {
                $objects[] = new ComplexToken(
                    $token[0],
                    token_name($token[0]),
                    $token[1],
                    $token[2]
                );
            }
        }
        
        return new MethodTokens($objects);
    }
}