<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\File;

use PHPUnit\Framework\TestCase;

final class FilesTest extends TestCase
{
    public function testItCanCreateFile(): void
    {
        $files = new Files();

        $rootPath = 'some $rootPath value';
        $filePath = 'some $filePath value';

        $files->createFile($rootPath, $filePath);
    }
}