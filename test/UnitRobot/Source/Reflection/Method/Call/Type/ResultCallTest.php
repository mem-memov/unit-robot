<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection\Method\Call\Type;

use MemMemov\UnitRobot\Source\Reflection\Method\Call\Variable\Variable;
use MemMemov\UnitRobot\UnitTest\Builder\Declarations as UnitTestDeclarations;
use MemMemov\UnitRobot\UnitTest\Builder\CallDeclarations as UnitTestCallDeclarations;
use PHPUnit\Framework\TestCase;

final class ResultCallTest extends TestCase
{
    protected $callVariable;
    protected $method;
    protected $resultVariable;

    protected function setUp(): void
    {
        $this->callVariable = $this->createMock(Variable::class);
        $this->method = 'some $this->method value';
        $this->resultVariable = $this->createMock(Variable::class);
    }

    public function testItCanFillUnitTestMethod(): void
    {
        $resultCall = new ResultCall($this->callVariable, $this->method, $this->resultVariable);

        $declarations = $this->createMock(UnitTestDeclarations::class);
        $callDeclarations = $this->createMock(UnitTestCallDeclarations::class);

        $resultCall->fillUnitTestMethod($declarations, $callDeclarations);
    }
}