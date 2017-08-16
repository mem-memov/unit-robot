<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection\Method\Call\Type;

use MemMemov\UnitRobot\Source\Reflection\Method\Call\Variable\Variable;
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
}