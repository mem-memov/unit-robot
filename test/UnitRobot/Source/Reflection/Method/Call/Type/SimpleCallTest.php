<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection\Method\Call\Type;

use MemMemov\UnitRobot\Source\Reflection\Method\Call\Variable\Variable;
use MemMemov\UnitRobot\UnitTest\Builder\Declarations as UnitTestDeclarations;
use MemMemov\UnitRobot\UnitTest\Builder\CallDeclarations as UnitTestCallDeclarations;
use PHPUnit\Framework\TestCase;

final class SimpleCallTest extends TestCase
{
    protected $callVariable;
    protected $method;

    protected function setUp(): void
    {
        $this->callVariable = $this->createMock(Variable::class);
        $this->method = 'some $this->method value';
    }

    public function testItCanFillUnitTestMethod(): void
    {
        $simpleCall = new SimpleCall($this->callVariable, $this->method);

        $declarations = $this->createMock(UnitTestDeclarations::class);
        $callDeclarations = $this->createMock(UnitTestCallDeclarations::class);

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