<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection\Method\Call\Type;

use MemMemov\UnitRobot\Source\Reflection\Method\Call\Variable\Variable;
use MemMemov\UnitRobot\UnitTest\Builder\Declarations as UnitTestDeclarations;
use MemMemov\UnitRobot\UnitTest\Builder\CallDeclarations as UnitTestCallDeclarations;
use PHPUnit\Framework\TestCase;

final class SimpleCallTest extends TestCase
{
    public function testItCanFillUnitTestMethod(): void
    {
        $simpleCall = new SimpleCall();

        $declarations = $this->createMock(UnitTestDeclarations::class);
        $callDeclarations = $this->createMock(UnitTestCallDeclarations::class);

        $callDeclaration = 'some $callDeclaration value';

        $declarations->expects($this->once())
            ->method('createSimpleCallDeclaration')
            ->willReturn($callDeclaration);

        $this->callVariable->expects($this->once())
            ->method('toString');

        $callDeclarations->expects($this->once())
            ->method('addDeclaration');

        $simpleCall->fillUnitTestMethod($declarations, $callDeclarations);
    }
}