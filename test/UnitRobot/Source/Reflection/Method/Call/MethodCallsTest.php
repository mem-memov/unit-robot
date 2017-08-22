<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection\Method\Call;

use MemMemov\UnitRobot\Source\Reflection\Method\Call\Type\Call;
use MemMemov\UnitRobot\UnitTest\MethodCalls as UnitTestMethodCalls;
use MemMemov\UnitRobot\UnitTest\Builder\Declarations as UnitTestDeclarations;
use MemMemov\UnitRobot\UnitTest\Builder\CallDeclarations as UnitTestCallDeclarations;
use PHPUnit\Framework\TestCase;

final class MethodCallsTest extends TestCase
{
    public function testItCanAddCall(): void
    {
        $methodCalls = new MethodCalls();

        $call = $this->createMock(Call::class);

        $methodCalls->addCall($call);
    }

    public function testItCanFillUnitTestMethod(): void
    {
        $methodCalls = new MethodCalls();

        $declarations = $this->createMock(UnitTestDeclarations::class);
        $callDeclarations = $this->createMock(UnitTestCallDeclarations::class);

        $methodCalls->fillUnitTestMethod($declarations, $callDeclarations);
    }
}