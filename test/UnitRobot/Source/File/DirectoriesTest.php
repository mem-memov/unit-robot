<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\File;

use MemMemov\UnitRobot\Source\Reflection\Reflections;
use MemMemov\UnitRobot\Source\Reflection\Methods;
use MemMemov\UnitRobot\Source\Token\Tokens;
use PHPUnit\Framework\TestCase;

final class DirectoriesTest extends TestCase
{
    protected $directoryIterators;
    protected $files;
    protected $reflections;

    protected function setUp(): void
    {
        $this->directoryIterators = $this->createMock(DirectoryIterators::class);
        $this->files = $this->createMock(Files::class);
        $this->reflections = $this->createMock(Reflections::class);
    }

    public function testItCanCreateDirectory(): void
    {
    }
}