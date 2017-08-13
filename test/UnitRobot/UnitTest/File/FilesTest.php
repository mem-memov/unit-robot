<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\UnitTest\File;

use PHPUnit\Framework\TestCase;

final class FilesTest extends TestCase
{
    public function testItCanCreate(): void
    {
        $files = new Files();

        $rootPath = 'some $rootPath value';
        $path = 'some $path value';
        $name = 'some $name value';

        $files->create($rootPath, $path, $name);
    }
}