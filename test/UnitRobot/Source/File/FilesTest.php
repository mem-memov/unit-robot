<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\File;

use PHPUnit\Framework\TestCase;

final class FilesTest extends TestCase
{
    protected $texts;

    protected function setUp(): void
    {
        $this->texts = $this->createMock(Texts::class);
    }

    public function testItCanCreateFile(): void
    {
        $files = new Files($this->texts);

        $rootPath = 'some $rootPath value';
        $filePath = 'some $filePath value';

        $files->createFile($rootPath, $filePath);
    }
}