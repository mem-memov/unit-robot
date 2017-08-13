<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Token;

use PHPUnit\Framework\TestCase;

final class MethodBodiesTest extends TestCase
{
    protected $tokens;

    protected function setUp(): void
    {
        $this->tokens = $this->createMock(Tokens::class);
    }

    public function testItCanCreateMethodBody(): void
    {
        $methodBodies = new MethodBodies($this->tokens);

        $methodBody = 'some $methodBody value';

        $methodBodies->createMethodBody($methodBody);
    }
}