<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection\Method\Call\Type;

use MemMemov\UnitRobot\Source\Reflection\Method\Call\Variable\Variable;
use PHPUnit\Framework\TestCase;

final class SimpleCallTest extends TestCase
{
    public function testItCan__create(): void
    {
        $simpleCall = new SimpleCall();

        $callVariable = $this->createMock(Variable::class);
        $method = 'some $method value';

        $simpleCall->__create($callVariable, $method);
    }
}