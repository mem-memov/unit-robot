<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot;

use PHPUnit\Framework\TestCase;

final class UnitRobotTest extends TestCase
{
    protected $configuration;

    protected function setUp(): void
    {
        $this->configuration = $this->createMock(Configuration::class);
    }

    public function testItCanCreateTests(): void
    {
        $unitRobot = new UnitRobot($this->configuration);

        $unitRobot->createTests();
    }
}