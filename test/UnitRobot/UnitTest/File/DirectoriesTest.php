<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\UnitTest\File;

use PHPUnit\Framework\TestCase;

final class DirectoriesTest extends TestCase
{
    protected $files;

    protected function setUp(): void
    {
        $this->files = $this->createMock(Files::class);
    }

    public function testItCanCreateDirectory(): void
    {
        $directories = new Directories($this->files);

        $path = 'some $path value';

        $directories->createDirectory($path);
    }
}