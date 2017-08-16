<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection\Method\Call\Type;

use MemMemov\UnitRobot\Source\Reflection\Method\Call\Variable\Variable;
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
}