<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\UnitTest\File;

use PHPUnit\Framework\TestCase;

final class DirectoriesTest extends TestCase
{
    protected $files;

    protected function setUp(): void
    {
        $this->files = $this->createMock(Files::class);
    }

}