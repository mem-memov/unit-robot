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
        $this->rootPath = 'some $this->rootPath value';
        $this->path = 'some $this->path value';
        $this->name = 'some $this->name value';
        $this->content = 'some $this->content value';
        $this->texts = $this->createMock(Texts::class);
    }

    public function testItCanHasClass(): void
    {
        $file = new File($this->rootPath, $this->path, $this->name, $this->content, $this->texts);

        $file->hasClass();
    }

    public function testItCanGetClassName(): void
    {
        $file = new File($this->rootPath, $this->path, $this->name, $this->content, $this->texts);

        $file->getClassName();
    }

    public function testItCanGetText(): void
    {
        $file = new File($this->rootPath, $this->path, $this->name, $this->content, $this->texts);

        $file->getText();
    }

    public function testItCanCreateUnitTestFile(): void
    {
        $file = new File($this->rootPath, $this->path, $this->name, $this->content, $this->texts);

        $unitTestDirectory = $this->createMock(UnitTestDirectory::class);

        $file->createUnitTestFile($unitTestDirectory);
    }
}