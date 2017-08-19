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

    protected function setUp(): void
    {
        $this->rootPath = 'some $this->rootPath value';
        $this->path = 'some $this->path value';
        $this->name = 'some $this->name value';
        $this->content = 'some $this->content value';
    }

}