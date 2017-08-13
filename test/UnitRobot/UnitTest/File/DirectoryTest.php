<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\UnitTest\File;

use PHPUnit\Framework\TestCase;

final class DirectoryTest extends TestCase
{
    protected $path;
    protected $files;

    protected function setUp(): void
    {
        $this->path = $this->createMock(string::class);
        $this->files = $this->createMock(Files::class);
    }

    public function testItCanCreateFile(): void
    {
    }
}