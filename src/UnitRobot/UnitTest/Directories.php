<?php
namespace MemMemov\UnitRobot\UnitTest;

class Directories
{
    private $files;
    
    public function __construct(
        Files $files
    ) {
        $this->files = $files;
    }
    
    public function createDirectory(string $path): Directory
    {
        return new Directory($path, $this->files);
    }
}