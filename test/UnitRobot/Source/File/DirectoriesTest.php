<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\File;

use MemMemov\UnitRobot\Source\Reflection\Reflections;
use MemMemov\UnitRobot\Source\Reflection\Methods;
use MemMemov\UnitRobot\Source\Token\Tokens;
use MemMemov\UnitRobot\UnitTest\UnitTests;
use PHPUnit\Framework\TestCase;

final class DirectoriesTest extends TestCase
{
    protected $directoryIterators;
    protected $files;
    protected $reflections;
    protected $unitTests;
    protected $classFilter;

    protected function setUp(): void
    {
        $this->directoryIterators = $this->createMock(DirectoryIterators::class);
        $this->files = $this->createMock(Files::class);
        $this->reflections = $this->createMock(Reflections::class);
        $this->unitTests = $this->createMock(UnitTests::class);
        $this->classFilter = 'some $this->classFilter value';
    }

    public function testItCanCreateDirectory(): void
    {
        $directories = new Directories($this->directoryIterators, $this->files, $this->reflections, $this->unitTests, $this->classFilter);

        $path = 'some $path value';

        $directories->createDirectory($path);
    }
}