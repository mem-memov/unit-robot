<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection\Method\Call;

use PHPUnit\Framework\TestCase;

final class PositioningsTest extends TestCase
{
    public function testItCanCreatePositioning(): void
    {
        $positionings = new Positionings();

        $beforeParametersPosition = 5;
        $openBracketPosition = 5;
        $closeBracketPosition = 5;

        $positionings->createPositioning($beforeParametersPosition, $openBracketPosition, $closeBracketPosition);
    }
}