<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\File;

use MemMemov\UnitRobot\Source\Reflection\Reflections;
use MemMemov\UnitRobot\UnitTest\File\Directory as UnitTestDirectory;
use PHPUnit\Framework\TestCase;

final class DirectoryTest extends TestCase
{
    protected path;
    protected directoryIterators;
    protected files;
    protected reflections;

    protected function setUp(): void
    {
    }

    public function testItCanCreateTests(): void
    {
    }
}