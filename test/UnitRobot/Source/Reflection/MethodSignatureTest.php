<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection;

use MemMemov\UnitRobot\Source\File\Text;
use MemMemov\UnitRobot\Source\Token\MethodSignatures as Tokens;
use MemMemov\UnitRobot\Source\Token\MethodSignature as SignatureTokens;
use PHPUnit\Framework\TestCase;

final class MethodSignatureTest extends TestCase
{
    protected $reflection;
    protected $tokens;

    protected function setUp(): void
    {
        $this->reflection = $this->createMock(\ReflectionMethod::class);
        $this->tokens = $this->createMock(Tokens::class);
    }

    public function testItCanGetTokens(): void
    {
        $methodSignature = new MethodSignature($this->reflection, $this->tokens);

        $methodSignature->getTokens($methodString);
    }
}