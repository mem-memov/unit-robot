<?php
namespace MemMemov\UnitRobot\Source\File;

use MemMemov\UnitRobot\Source\Reflection\Reflections;
use MemMemov\UnitRobot\Source\Reflection\Methods;
use MemMemov\UnitRobot\Source\Token\Tokens;

class Directories
{
    private $directoryIterators;
    private $files;
    private $reflections;
    
    public function __construct(
        $directoryIterators,
        $files,
        $reflections
    ) {
        $this->directoryIterators = $directoryIterators;
        $this->files = $files;
        $this->reflections = $reflections;
    }
    
    public function createDirectory(string $path): Directory
    {
        return new Directory(
            $path,
            $this->directoryIterators,
            $this->files,
            $this->reflections
        );
    }
}