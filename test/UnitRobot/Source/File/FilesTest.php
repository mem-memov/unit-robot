<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\File;

use PHPUnit\Framework\TestCase;

final class FilesTest extends TestCase
{
    protected $texts;

    protected function setUp(): void
    {
        $this->texts = $this->createMock(Texts::class);
    }

}