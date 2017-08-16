<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\File;

use MemMemov\UnitRobot\Source\Reflection\Reflections;
use MemMemov\UnitRobot\UnitTest\File\Directory as UnitTestDirectory;
use PHPUnit\Framework\TestCase;

final class DirectoryTest extends TestCase
{
    protected $path;
    protected $directoryIterators;
    protected $files;
    protected $reflections;

    protected function setUp(): void
    {
        $this->path = 'some $this->path value';
        $this->directoryIterators = $this->createMock(DirectoryIterators::class);
        $this->files = $this->createMock(Files::class);
        $this->reflections = $this->createMock(Reflections::class);
    }

    public function testItCanCreateTests(): void
    {
        $directory = new Directory($this->path, $this->directoryIterators, $this->files, $this->reflections);

        $unitTestDirectory = $this->createMock(UnitTestDirectory::class);

        $file->expects($this->once())
            ->method('hasClass');

        $reflection->expects($this->once())
            ->method('createTests');

        $directory->createTests($unitTestDirectory);
    }
}