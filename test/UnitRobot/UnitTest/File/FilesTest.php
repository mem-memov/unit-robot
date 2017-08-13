<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\UnitTest\File;

use PHPUnit\Framework\TestCase;

final class FilesTest extends TestCase
{
    public function testItCanCreate(): void
    {
        $files = new Files();

        $files->create($rootPath, $path, $name);
    }
}