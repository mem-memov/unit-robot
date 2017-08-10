<?php
namespace MemMemov\UnitRobot\Source;

use MemMemov\UnitRobot\UnitTest\Directory as UnitTestDirectory;

class Directory
{
    private $path;
    private $directoryIterators;
    
    public function __construct(
        string $path,
        DirectoryIterators $directoryIterators
    ) {
        $this->path = $path;
        $this->directoryIterators = $directoryIterators;
    }
    
    public function createTests(UnitTestDirectory $unitTestDirectory): void
    {
        $filePaths = $this->directoryIterators->createRecursivePhpFileIterator(
            $this->path
        );
        
        foreach ($filePaths as $filePath) {
            var_dump($filePath);
        }
        
    }
}