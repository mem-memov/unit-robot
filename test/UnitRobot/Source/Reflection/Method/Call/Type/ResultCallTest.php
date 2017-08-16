<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection\Method\Call\Type;

use MemMemov\UnitRobot\Source\Reflection\Method\Call\Variable\Variable;
use MemMemov\UnitRobot\UnitTest\Builder\Declarations as UnitTestDeclarations;
use MemMemov\UnitRobot\UnitTest\Builder\CallDeclarations as UnitTestCallDeclarations;
use PHPUnit\Framework\TestCase;

final class ResultCallTest extends TestCase
{
    public function testItCan__create(): void
    {
        $resultCall = new ResultCall();

        $callVariable = $this->createMock(Variable::class);
        $method = 'some $method value';
        $resultVariable = $this->createMock(Variable::class);

        $resultCall->__create($callVariable, $method, $resultVariable);
    }

    public function testItCanFillUnitTestMethod(): void
    {
        $resultCall = new ResultCall();

        $declarations = $this->createMock(UnitTestDeclarations::class);
        $callDeclarations = $this->createMock(UnitTestCallDeclarations::class);

        $resultCall->fillUnitTestMethod($declarations, $callDeclarations);
    }
}