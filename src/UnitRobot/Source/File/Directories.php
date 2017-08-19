<?php
namespace MemMemov\UnitRobot\Source\File;

use MemMemov\UnitRobot\Source\Reflection\Reflections;
use MemMemov\UnitRobot\Source\Reflection\Methods;
use MemMemov\UnitRobot\Source\Token\Tokens;
use MemMemov\UnitRobot\UnitTest\UnitTests;

class Directories
{
    private $directoryIterators;
    private $files;
    private $reflections;
    private $unitTests;
    
    public function __construct(
        DirectoryIterators $directoryIterators,
        Files $files,
        Reflections $reflections,
        UnitTests $unitTests
    ) {
        $this->directoryIterators = $directoryIterators;
        $this->files = $files;
        $this->reflections = $reflections;
        $this->unitTests = $unitTests;
    }
    
    public function createDirectory(string $path): Directory
    {
        return new Directory(
            $path,
            $this->directoryIterators,
            $this->files,
            $this->reflections,
            $this->unitTests
        );
    }
}