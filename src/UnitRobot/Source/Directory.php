<?php
namespace MemMemov\UnitRobot\Source;

use MemMemov\UnitRobot\UnitTest\Directory as UnitTestDirectory;

class Directory
{
    private $path;
    private $directoryIterators;
    private $files;
    
    public function __construct(
        string $path,
        DirectoryIterators $directoryIterators,
        Files $files
    ) {
        $this->path = $path;
        $this->directoryIterators = $directoryIterators;
        $this->files = $files;
    }
    
    public function createTests(UnitTestDirectory $unitTestDirectory): void
    {
        $filePaths = $this->directoryIterators->createRecursivePhpFileIterator(
            $this->path
        );
        
        foreach ($filePaths as $filePath) {
            $file = $this->files->createFile($this->path, $filePath[0]);
        }
        
    }
}