<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\UnitTest\File;

use PHPUnit\Framework\TestCase;

final class DirectoryTest extends TestCase
{
    public function testItCanCreateFile(): void
    {
        $directory = new Directory();

        $path = 'some $path value';
        $sourceFileName = 'some $sourceFileName value';

        $directory->createFile($path, $sourceFileName);
    }
}