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

        $parameterName = 'some $parameterName value';

        $token->expects($this->once())
            ->method('hasVariable');

        $typePart->expects($this->once())
            ->method('isTypePart');

        $methodSignature->getParameterType($parameterName);
    }
}