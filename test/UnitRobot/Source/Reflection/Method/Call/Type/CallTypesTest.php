<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection\Method\Call\Type;

use MemMemov\UnitRobot\Source\Reflection\Method\Call\Variable\Variable;
use PHPUnit\Framework\TestCase;

final class CallTypesTest extends TestCase
{
    public function testItCanCreateSimpleCall(): void
    {
        $callTypes = new CallTypes();

        $callVariable = $this->createMock(Variable::class);
        $method = 'some $method value';

        $callTypes->createSimpleCall($callVariable, $method);
    }

    public function testItCanCreateReturnCall(): void
    {
        $callTypes = new CallTypes();

        $callVariable = $this->createMock(Variable::class);
        $method = 'some $method value';

        $callTypes->createReturnCall($callVariable, $method);
    }

    public function testItCanCreateResultCall(): void
    {
        $callTypes = new CallTypes();

        $callVariable = $this->createMock(Variable::class);
        $method = 'some $method value';
        $resultVariable = $this->createMock(Variable::class);

        $callTypes->createResultCall($callVariable, $method, $resultVariable);
    }
}