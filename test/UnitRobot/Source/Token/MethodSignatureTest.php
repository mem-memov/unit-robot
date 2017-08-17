<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Token;

use PHPUnit\Framework\TestCase;

final class MethodSignatureTest extends TestCase
{
    public function testItCanGetParameterType(): void
    {
        $methodSignature = new MethodSignature();

        $parameterName = 'some $parameterName value';

        $token->expects($this->once())
            ->method('hasVariable');

        $typePart->expects($this->once())
            ->method('isTypePart');

        $type = 'some $type value';

        $typePart->expects($this->once())
            ->method('getString')
            ->willReturn($type);

        $methodSignature->getParameterType($parameterName);
    }
}