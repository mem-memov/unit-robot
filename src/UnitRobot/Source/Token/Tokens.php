<?php
namespace MemMemov\UnitRobot\Source\Token;

class Tokens
{
    public function createTokens(string $phpCode): array
    {
        $tokens = token_get_all('<?php ' . $phpCode);
        
        $objects = [];
        foreach ($tokens as $token) {
            if (is_string($token)) {
                $object = new SimpleToken($token);
            } else {
                $object = new ComplexToken(
                    $token[0],
                    token_name($token[0]),
                    $token[1],
                    $token[2]
                );
            }
            $objects[] = $object;
        }
        
        return $objects;
    }
}