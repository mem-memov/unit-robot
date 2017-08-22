<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Token;

use PHPUnit\Framework\TestCase;

final class MethodSignaturesTest extends TestCase
{
    protected $tokens;

    protected function setUp(): void
    {
        $this->tokens = $this->createMock(Tokens::class);
    }

    public function testItCanCreateMethodSignature(): void
    {
        $methodSignatures = new MethodSignatures($this->tokens);

        $methodSignature = 'some $methodSignature value';

        $methodSignatures->createMethodSignature($methodSignature);
    }
}