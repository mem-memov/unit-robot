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

    public function testItCanFillCallPositionings(): void
    {
        $parsedMatches = new ParsedMatches($this->matches);

        $methodString = 'some $methodString value';
        $callPositionings = $this->createMock(CallPositionings::class);
        $positionings = $this->createMock(Positionings::class);

        $callPositionings->expects($this->once())
            ->method('addPositioning');

        $parsedMatches->fillCallPositionings($methodString, $callPositionings, $positionings);
    }

    public function testItCanFillMethodCalls(): void
    {
        $parsedMatches = new ParsedMatches($this->matches);

        $methodCalls = $this->createMock(MethodCalls::class);
        $callPositionings = $this->createMock(CallPositionings::class);
        $callTypes = $this->createMock(CallTypes::class);
        $variables = $this->createMock(Variables::class);

        $variables->expects($this->once())
            ->method('createPropertyVariable');

        $variables->expects($this->once())
            ->method('createParameterVariable');

        $variables->expects($this->once())
            ->method('createPropertyVariable');

        $variables->expects($this->once())
            ->method('createParameterVariable');

        $methodCalls->expects($this->once())
            ->method('addCall');

        $parsedMatches->fillMethodCalls($methodCalls, $callPositionings, $callTypes, $variables);
    }
}