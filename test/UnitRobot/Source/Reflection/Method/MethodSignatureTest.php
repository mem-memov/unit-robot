<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection\Method;

use MemMemov\UnitRobot\Source\File\Text;
use MemMemov\UnitRobot\Source\Token\MethodSignatures as Tokens;
use MemMemov\UnitRobot\Source\Token\MethodSignature as SignatureTokens;
use PHPUnit\Framework\TestCase;

final class MethodSignatureTest extends TestCase
{
    public function testItCanGetTokens(): void
    {
        $methodSignature = new MethodSignature();

        $methodString = 'some $methodString value';

        $this->signatureTokens = 'some $this->signatureTokens value';

        $this->tokens->expects($this->once())
            ->method('createMethodSignature')
            ->willReturn($this->signatureTokens);

        $methodSignature->getTokens($methodString);
    }
}