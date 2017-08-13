<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection;

use MemMemov\UnitRobot\Source\File\Text;
use MemMemov\UnitRobot\Source\Token\MethodBodies as Tokens;
use MemMemov\UnitRobot\Source\Token\MethodBody as BodyTokens;
use PHPUnit\Framework\TestCase;

final class MethodBodyTest extends TestCase
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
        $methodBody = new MethodBody($this->reflection, $this->tokens);
    }
}