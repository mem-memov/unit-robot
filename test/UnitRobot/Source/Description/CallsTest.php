<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Description;

use MemMemov\UnitRobot\UnitTest\MethodCalls as UnitTestMethodCalls;
use MemMemov\UnitRobot\UnitTest\Builder\Declarations as UnitTestDeclarations;
use MemMemov\UnitRobot\UnitTest\Builder\CallDeclarations as UnitTestCallDeclarations;
use PHPUnit\Framework\TestCase;

final class CallsTest extends TestCase
{
    public function testItCanFillUnitTestMethod(): void
    {
        $calls = new Calls();

        $declarations = $this->createMock(UnitTestDeclarations::class);
        $callDeclarations = $this->createMock(UnitTestCallDeclarations::class);

        $calls->fillUnitTestMethod($declarations, $callDeclarations);
    }
}