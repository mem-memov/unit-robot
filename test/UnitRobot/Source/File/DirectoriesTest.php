<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\File;

use MemMemov\UnitRobot\Source\Reflection\Reflections;
use MemMemov\UnitRobot\Source\Reflection\Methods;
use MemMemov\UnitRobot\Source\Token\Tokens;
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