<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection;

use MemMemov\UnitRobot\Source\Token\MethodSignatures as MethodSignatureTokens;
use MemMemov\UnitRobot\Source\Token\MethodBodies as MethodBodyTokens;
use PHPUnit\Framework\TestCase;

final class MethodsTest extends TestCase
{
    protected $methodSignatureTokens;
    protected $methodBodyTokens;
    protected $parameters;

    protected function setUp(): void
    {
    }

    public function testItCanCreateMethod(): void
    {
    }
}