<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\File;

use PHPUnit\Framework\TestCase;

final class TextTest extends TestCase
{
    public function testItCanExtract(): void
    {
        $text = new Text();

        $startLine = 5;
        $endLine = 5;

        $text->extract($startLine, $endLine);
    }
}