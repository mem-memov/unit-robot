<?php
namespace MemMemov\UnitRobot\UnitTest\File;

class Directory
{
    private const FILE_NAME_PATTERN = '/(\.php)$/';
    
    private $path;
    private $files;
    
    public function __construct(
        string $path,
        Files $files
    ) {
        $this->path = $path;
        $this->files = $files;
    }
    
    public function createFile(string $path, string $sourceFileName): File
    {
        $name = preg_replace(self::FILE_NAME_PATTERN, 'Test.php', $sourceFileName);
        
        return $this->files->create($this->path, $path, $name);
    }
}