<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\UnitTest\File;

use PHPUnit\Framework\TestCase;

final class DirectoriesTest extends TestCase
{
    public function testItCanCreateDirectory(): void
    {
        $directories = new Directories();

        $path = 'some $path value';

        $directories->createDirectory($path);
    }
}