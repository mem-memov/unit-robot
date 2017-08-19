<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection\Method\Call\Parser;

use MemMemov\UnitRobot\Source\Reflection\Method\Call\Type\CallTypes;
use MemMemov\UnitRobot\Source\Reflection\Method\Call\CallPositionings;
use MemMemov\UnitRobot\Source\Reflection\Method\Call\MethodCalls;
use MemMemov\UnitRobot\Source\Reflection\Method\Call\Positionings;
use MemMemov\UnitRobot\Source\Reflection\Method\Call\Variable\Variables;
use PHPUnit\Framework\TestCase;

final class ParsedMatchesTest extends TestCase
{
    protected $matches;

    protected function setUp(): void
    {
        $this->matches = [];
    }

}