<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection\Method\Call\Variable;

use PHPUnit\Framework\TestCase;

final class ParameterVariableTest extends TestCase
{
    public function testItCanToString(): void
    {
        $parameterVariable = new ParameterVariable();

        $parameterVariable->toString();
    }
}