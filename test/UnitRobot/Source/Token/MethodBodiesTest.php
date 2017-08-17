<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Token;

use PHPUnit\Framework\TestCase;

final class MethodBodiesTest extends TestCase
{
    public function testItCanCreateMethodBody(): void
    {
        $methodBodies = new MethodBodies();

        $methodBody = 'some $methodBody value';

        $this->tokens = 'some $this->tokens value';

        $this->tokens->expects($this->once())
            ->method('createTokens')
            ->willReturn($this->tokens);

        $methodBodies->createMethodBody($methodBody);
    }
}