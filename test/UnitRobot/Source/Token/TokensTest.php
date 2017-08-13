<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Token;

use PHPUnit\Framework\TestCase;

final class TokensTest extends TestCase
{
    public function testItCanCreateTokens(): void
    {
        $tokens = new Tokens();

        $tokens->createTokens();
    }
}