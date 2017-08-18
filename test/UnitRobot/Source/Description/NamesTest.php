<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Description;

use PHPUnit\Framework\TestCase;

final class NamesTest extends TestCase
{
    public function testItCanCreateInstanceName(): void
    {
        $names = new Names();

        $names->createInstanceName();
    }
}