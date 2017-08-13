<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\File;

use PHPUnit\Framework\TestCase;

final class TextTest extends TestCase
{
    protected $lines;

    protected function setUp(): void
    {
        $this->lines = $this->createMock(array::class);
    }

    public function testItCanExtract(): void
    {
    }
}