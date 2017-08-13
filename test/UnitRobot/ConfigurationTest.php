<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot;

use MemMemov\UnitRobot\Source\File\Directories as SourceDirectories;
use MemMemov\UnitRobot\Source\File\Directory as SourceDirectory;
use MemMemov\UnitRobot\UnitTest\File\Directories as UnitTestDirectories;
use MemMemov\UnitRobot\UnitTest\File\Directory as UnitTestDirectory;
use PHPUnit\Framework\TestCase;

final class ConfigurationTest extends TestCase
{
    protected $config;
    protected $sourceDirectories;
    protected $unitTestDirectories;

    protected function setUp(): void
    {
        $this->config = $this->createMock(array::class);
        $this->sourceDirectories = $this->createMock(SourceDirectories::class);
        $this->unitTestDirectories = $this->createMock(UnitTestDirectories::class);
    }

    public function testItCanCreateSourceDirectory(): void
    {
    }

    public function testItCanCreateUnitTestDirectory(): void
    {
    }
}