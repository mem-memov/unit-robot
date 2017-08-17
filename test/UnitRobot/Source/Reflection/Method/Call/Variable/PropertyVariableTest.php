<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection\Method\Call\Variable;

use PHPUnit\Framework\TestCase;

final class PropertyVariableTest extends TestCase
{
    public function testItCanToString(): void
    {
        $propertyVariable = new PropertyVariable();

        $propertyVariable->toString();
    }
}