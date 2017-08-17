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
        $this->config = [];
        $this->sourceDirectories = $this->createMock(SourceDirectories::class);
        $this->unitTestDirectories = $this->createMock(UnitTestDirectories::class);
    }

    public function testItCanCreateSourceDirectory(): void
    {
        $configuration = new Configuration($this->config, $this->sourceDirectories, $this->unitTestDirectories);

        $configuration->createSourceDirectory();
    }

    public function testItCanCreateUnitTestDirectory(): void
    {
        $configuration = new Configuration($this->config, $this->sourceDirectories, $this->unitTestDirectories);

        $configuration->createUnitTestDirectory();
    }
}