<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\UnitTest\File;

use PHPUnit\Framework\TestCase;

final class DirectoryTest extends TestCase
{
    protected $path;

    protected function setUp(): void
    {
        $this->path = 'some $this->path value';
    }

}