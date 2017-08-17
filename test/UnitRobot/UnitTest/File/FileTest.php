<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\UnitTest\File;

use PHPUnit\Framework\TestCase;

final class FileTest extends TestCase
{
    public function testItCanCreate(): void
    {
        $file = new File();

        $content = 'some $content value';

        $file->create($content);
    }
}