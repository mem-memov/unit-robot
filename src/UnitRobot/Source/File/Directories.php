<?php
namespace MemMemov\UnitRobot\Source\File;

use MemMemov\UnitRobot\Source\Reflection\Reflections;
use MemMemov\UnitRobot\Source\Reflection\Methods;
use MemMemov\UnitRobot\Source\Token\Tokens;
use MemMemov\UnitRobot\Source\Description\Instancies;

class Directories
{
    private $directoryIterators;
    private $files;
    private $reflections;
    private $instances;
    
    public function __construct(
        DirectoryIterators $directoryIterators,
        Files $files,
        Reflections $reflections,
        Instancies $instances
    ) {
        $this->directoryIterators = $directoryIterators;
        $this->files = $files;
        $this->reflections = $reflections;
        $this->instances = $instances;
    }
    
    public function createDirectory(string $path): Directory
    {
        return new Directory(
            $path,
            $this->directoryIterators,
            $this->files,
            $this->reflections,
            $this->instances
        );
    }
}