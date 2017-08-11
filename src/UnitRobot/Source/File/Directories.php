<?php
namespace MemMemov\UnitRobot\Source\File;

use MemMemov\UnitRobot\Source\Reflection\Reflections;
use MemMemov\UnitRobot\Source\Reflection\Methods;
use MemMemov\UnitRobot\Source\Token\Tokens;

class Directories
{
    public function createDirectory(string $path): Directory
    {
        return new Directory(
            $path,
            new DirectoryIterators(),
            new Files(
                new Texts()
            ),
            new Reflections(
                new Methods(
                    new Tokens()
                )
            )
        );
    }
}