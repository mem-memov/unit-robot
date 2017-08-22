<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection\Method\Call\Variable;

use PHPUnit\Framework\TestCase;

final class PropertyVariableTest extends TestCase
{
    protected $variableName;

    protected function setUp(): void
    {
        $this->variableName = 'some $this->variableName value';
    }

    public function testItCanToString(): void
    {
        $propertyVariable = new PropertyVariable($this->variableName);

        $propertyVariable->toString();
    }
}