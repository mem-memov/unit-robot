<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\File;

use PHPUnit\Framework\TestCase;

final class DirectoryIteratorsTest extends TestCase
{
    public function testItCanCreateRecursivePhpFileIterator(): void
    {
        $directoryIterators = new DirectoryIterators();

        $directoryPath = 'some $directoryPath value';

        $directoryIterators->createRecursivePhpFileIterator($directoryPath);
    }
}