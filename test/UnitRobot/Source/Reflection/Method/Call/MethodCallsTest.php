<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection\Method\Call;

use MemMemov\UnitRobot\Source\Reflection\Method\Call\Type\Call;
use PHPUnit\Framework\TestCase;

final class MethodCallsTest extends TestCase
{
    public function testItCanAddCall(): void
    {
        $methodCalls = new MethodCalls();

        $call = $this->createMock(Call::class);

        $methodCalls->addCall($call);
    }
}