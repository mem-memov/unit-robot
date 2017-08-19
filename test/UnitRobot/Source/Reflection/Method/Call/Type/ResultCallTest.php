<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection\Method\Call\Type;

use MemMemov\UnitRobot\Source\Reflection\Method\Call\Variable\Variable;
use MemMemov\UnitRobot\UnitTest\Builder\Declarations as UnitTestDeclarations;
use MemMemov\UnitRobot\UnitTest\Builder\CallDeclarations as UnitTestCallDeclarations;
use PHPUnit\Framework\TestCase;

final class ResultCallTest extends TestCase
{
    public function testItCanFillUnitTestMethod(): void
    {
        $resultCall = new ResultCall();

        $declarations = $this->createMock(UnitTestDeclarations::class);
        $callDeclarations = $this->createMock(UnitTestCallDeclarations::class);

        $callDeclaration = 'some $callDeclaration value';

        $declarations->expects($this->once())
            ->method('createResultCallDeclaration')
            ->willReturn($callDeclaration);

        $this->callVariable->expects($this->once())
            ->method('toString');

        $this->resultVariable->expects($this->once())
            ->method('toString');

        $callDeclarations->expects($this->once())
            ->method('addDeclaration');

        $resultCall->fillUnitTestMethod($declarations, $callDeclarations);
    }
}