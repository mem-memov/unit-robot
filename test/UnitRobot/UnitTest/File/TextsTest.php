<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\UnitTest\File;

use PHPUnit\Framework\TestCase;

final class TextsTest extends TestCase
{
    public function testItCanCreateText(): void
    {
        $texts = new Texts();
    }
}