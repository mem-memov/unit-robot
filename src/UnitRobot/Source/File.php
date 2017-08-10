<?php
namespace MemMemov\UnitRobot\Source;

class File
{
    private $rootPath;
    private $path;
    private $name;
    
    public function __construct(
        string $rootPath, 
        string $path, 
        string $name
    ) {
        $this->rootPath = $rootPath;
        $this->path = $path;
        $this->name = $name;
    }
}