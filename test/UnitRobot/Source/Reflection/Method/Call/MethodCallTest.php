<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection\Method\Call;

use PHPUnit\Framework\TestCase;

final class MethodCallTest extends TestCase
{
    protected $callPositioning;

    protected function setUp(): void
    {
        $this->callPositioning = $this->createMock(Positioning::class);
    }

}