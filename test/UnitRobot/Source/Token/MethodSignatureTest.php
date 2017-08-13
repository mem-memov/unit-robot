<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Token;

use PHPUnit\Framework\TestCase;

final class MethodSignatureTest extends TestCase
{
    protected $tokens;

    protected function setUp(): void
    {
        $this->tokens = [];
    }

    public function testItCanGetParameterType(): void
    {
        $methodSignature = new MethodSignature($this->tokens);

        $methodSignature->getParameterType($parameterName);
    }
}