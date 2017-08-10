<?php
namespace MemMemov\UnitRobot\Source;

use MemMemov\UnitRobot\Source\Directory as SourceDirectory;
use MemMemov\UnitRobot\Source\DirectoryIterators as SourceDirectoryIterators;
use MemMemov\UnitRobot\Source\Files as SourceFiles;
use MemMemov\UnitRobot\Source\Reflections as SourceReflections;

class Directories
{
    public function createDirectory(string $path): Directory
    {
        return new Directory(
            $path,
            new SourceDirectoryIterators(),
            new SourceFiles(),
            new SourceReflections()
        );
    }
}