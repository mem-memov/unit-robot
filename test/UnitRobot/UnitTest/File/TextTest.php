<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\UnitTest\File;

use PHPUnit\Framework\TestCase;

final class TextTest extends TestCase
{
    public function testItCanAppendLine(): void
    {
        $text = new Text();

        $line = 'some $line value';
        $offset = 5;

        $text->appendLine($line, $offset);
    }

    public function testItCanWriteToFile(): void
    {
        $text = new Text();

        $file = $this->createMock(File::class);

        $file->expects($this->once())
            ->method('create');

        $text->writeToFile($file);
    }
}