<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\File;

use MemMemov\UnitRobot\UnitTest\File\Directory as UnitTestDirectory;
use MemMemov\UnitRobot\UnitTest\File\File as UnitTestFile;
use PHPUnit\Framework\TestCase;

final class FileTest extends TestCase
{
    public function testItCanHasClass(): void
    {
        $file = new File();

        $file->hasClass();
    }

    public function testItCanGetClassName(): void
    {
        $file = new File();

        $file->getClassName();
    }

    public function testItCanGetText(): void
    {
        $file = new File();

        $file->getText();
    }

    public function testItCanCreateUnitTestFile(): void
    {
        $file = new File();

        $unitTestDirectory = $this->createMock(UnitTestDirectory::class);

        $file->createUnitTestFile($unitTestDirectory);
    }
}