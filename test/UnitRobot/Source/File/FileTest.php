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
        $this->rootPath = 'some rootPath value';
        $this->path = 'some path value';
        $this->name = 'some name value';
        $this->content = 'some content value';
        $this->texts = $this->createMock(Texts::class);
    }

    public function testItCanHasClass(): void
    {
        $file = new File();
    }

    public function testItCanGetClassName(): void
    {
        $file = new File();
    }

    public function testItCanGetText(): void
    {
        $file = new File();
    }

    public function testItCanCreateUnitTestFile(): void
    {
        $file = new File();
    }
}