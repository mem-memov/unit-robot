<?php
namespace MemMemov\UnitRobot\UnitTest\File;

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
    
    public function create(string $content): void
    {
        $directoryPath = $this->rootPath . $this->path;
        
        if (!file_exists($directoryPath)) {
            mkdir($directoryPath, 0777, true);
        }
        
        $filePath = $directoryPath . '/' . $this->name;
        
        file_put_contents($filePath, $content);
    }
}