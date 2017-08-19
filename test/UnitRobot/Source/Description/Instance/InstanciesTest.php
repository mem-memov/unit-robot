<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Description\Instance;

use PHPUnit\Framework\TestCase;

final class InstanciesTest extends TestCase
{
    public function testItCanCreateInstance(): void
    {
        $instancies = new Instancies();

        $instancies->createInstance();
    }
}