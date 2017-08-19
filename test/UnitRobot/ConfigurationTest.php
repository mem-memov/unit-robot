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
    public function testItCanCreateSourceDirectory(): void
    {
        $configuration = new Configuration();

        $configuration->createSourceDirectory();
    }

    public function testItCanCreateUnitTestDirectory(): void
    {
        $configuration = new Configuration();

        $configuration->createUnitTestDirectory();
    }
}