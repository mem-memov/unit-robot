<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\File;

use MemMemov\UnitRobot\UnitTest\File\Directory as UnitTestDirectory;
use MemMemov\UnitRobot\UnitTest\File\File as UnitTestFile;
use PHPUnit\Framework\TestCase;

final class FileTest extends TestCase
{
    protected $rootPath;
    protected $path;
    protected $name;
    protected $content;
    protected $texts;

    protected function setUp(): void
    {
        $this->rootPath = $this->createMock(string::class);
        $this->path = $this->createMock(string::class);
        $this->name = $this->createMock(string::class);
        $this->content = $this->createMock(string::class);
        $this->texts = $this->createMock(,::class);
    }

    public function testItCanHasClass(): void
    {
    }

    public function testItCanGetClassName(): void
    {
    }

    public function testItCanGetText(): void
    {
    }

    public function testItCanCreateUnitTestFile(): void
    {
    }
}