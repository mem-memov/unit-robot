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
        $this->rootPath = 'some $this->rootPath value';
        $this->path = 'some $this->path value';
        $this->name = 'some $this->name value';
    }

    public function testItCanCreate(): void
    {
        $file = new File($this->rootPath, $this->path, $this->name);

        $content = 'some $content value';

        $file->create($content);
    }
}