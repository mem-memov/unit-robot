<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection\Method\Call;

use PHPUnit\Framework\TestCase;

final class PositioningTest extends TestCase
{
    protected $beforeParametersPosition;
    protected $openBracketPosition;
    protected $closeBracketPosition;

    protected function setUp(): void
    {
        $this->beforeParametersPosition = 5;
        $this->openBracketPosition = 5;
        $this->closeBracketPosition = 5;
    }

}