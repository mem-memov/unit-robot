<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection\Method\Call;

use PHPUnit\Framework\TestCase;

final class PositioningsTest extends TestCase
{
    public function testItCanCreateCallPositionings(): void
    {
        $positionings = new Positionings();

        $methodString = 'some $methodString value';
        $matches = [];

        $positionings->createCallPositionings($methodString, $matches);
    }
}