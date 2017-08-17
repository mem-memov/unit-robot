<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Token;

use PHPUnit\Framework\TestCase;

final class MethodSignaturesTest extends TestCase
{
    public function testItCanCreateMethodSignature(): void
    {
        $methodSignatures = new MethodSignatures();

        $methodSignature = 'some $methodSignature value';

        $this->tokens = 'some $this->tokens value';

        $this->tokens->expects($this->once())
            ->method('createTokens')
            ->willReturn($this->tokens);

        $methodSignatures->createMethodSignature($methodSignature);
    }
}