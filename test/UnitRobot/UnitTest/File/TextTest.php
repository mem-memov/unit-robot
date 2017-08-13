<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\UnitTest\File;

use PHPUnit\Framework\TestCase;

final class TextTest extends TestCase
{
    public function testItCanAppendLine(): void
    {
        $text = new Text();

        $text->appendLine();
    }

    public function testItCanWriteToFile(): void
    {
        $text = new Text();

        $text->writeToFile();
    }
}