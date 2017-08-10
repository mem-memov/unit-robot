<?php
namespace MemMemov\UnitRobot\Source;

class Directories
{
    public function createDirectory(string $path): Directory
    {
        return new Directory(
            $path,
            new DirectoryIterators(),
            new Files(),
            new Reflections()
        );
    }
}