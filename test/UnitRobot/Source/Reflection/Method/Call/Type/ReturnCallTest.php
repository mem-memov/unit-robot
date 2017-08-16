<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection\Method\Call\Type;

use MemMemov\UnitRobot\Source\Reflection\Method\Call\Variable\Variable;
use MemMemov\UnitRobot\UnitTest\Builder\Declarations as UnitTestDeclarations;
use MemMemov\UnitRobot\UnitTest\Builder\CallDeclarations as UnitTestCallDeclarations;
use PHPUnit\Framework\TestCase;

final class ReturnCallTest extends TestCase
{
    public function testItCan__create(): void
    {
        $returnCall = new ReturnCall();

        $callVariable = $this->createMock(Variable::class);
        $method = 'some $method value';

        $returnCall->__create($callVariable, $method);
    }

    public function testItCanFillUnitTestMethod(): void
    {
        $returnCall = new ReturnCall();

        $declarations = $this->createMock(UnitTestDeclarations::class);
        $callDeclarations = $this->createMock(UnitTestCallDeclarations::class);

        $returnCall->fillUnitTestMethod($declarations, $callDeclarations);
    }
}