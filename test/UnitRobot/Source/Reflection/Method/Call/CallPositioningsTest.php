<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection\Method\Call;

use PHPUnit\Framework\TestCase;

final class CallPositioningsTest extends TestCase
{
    public function testItCanAddPositioning(): void
    {
        $callPositionings = new CallPositionings();

        $positioning = $this->createMock(Positioning::class);

        $callPositionings->addPositioning($positioning);
    }

    public function testItCanGetByIndex(): void
    {
        $callPositionings = new CallPositionings();

        $index = 5;

        $callPositionings->getByIndex($index);
    }
}