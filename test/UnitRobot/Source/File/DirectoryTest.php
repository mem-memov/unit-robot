<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\File;

use MemMemov\UnitRobot\Source\Reflection\Reflections;
use MemMemov\UnitRobot\UnitTest\File\Directory as UnitTestDirectory;
use MemMemov\UnitRobot\UnitTest\UnitTests;
use PHPUnit\Framework\TestCase;

final class DirectoryTest extends TestCase
{
    protected $path;
    protected $directoryIterators;
    protected $files;
    protected $reflections;
    protected $unitTests;

    protected function setUp(): void
    {
        $this->path = 'some $this->path value';
        $this->directoryIterators = $this->createMock(DirectoryIterators::class);
        $this->files = $this->createMock(Files::class);
        $this->reflections = $this->createMock(Reflections::class);
        $this->unitTests = $this->createMock(UnitTests::class);
    }

    public function testItCanCreateTests(): void
    {
        $directory = new Directory($this->path, $this->directoryIterators, $this->files, $this->reflections, $this->unitTests);

        $unitTestDirectory = $this->createMock(UnitTestDirectory::class);

        $directory->createTests($unitTestDirectory);
    }
}