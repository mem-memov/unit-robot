<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\UnitTest\File;

use PHPUnit\Framework\TestCase;

final class FileTest extends TestCase
{
    protected $rootPath;
    protected $path;
    protected $name;

    protected function setUp(): void
    {
        $this->rootPath = $this->createMock(string::class);
        $this->path = $this->createMock(string::class);
        $this->name = $this->createMock(string::class);
    }

    public function testItCanCreate(): void
    {
    }
}