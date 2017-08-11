<?php
namespace MemMemov\UnitRobot\Source\File;

use MemMemov\UnitRobot\Source\Reflection\Reflections;
use MemMemov\UnitRobot\UnitTest\Directory as UnitTestDirectory;

class Directory
{
    private $path;
    private $directoryIterators;
    private $files;
    private $reflections;
    
    public function __construct(
        string $path,
        DirectoryIterators $directoryIterators,
        Files $files,
        Reflections $reflections
    ) {
        $this->path = $path;
        $this->directoryIterators = $directoryIterators;
        $this->files = $files;
        $this->reflections = $reflections;
    }
    
    public function createTests(UnitTestDirectory $unitTestDirectory): void
    {
        $filePaths = $this->directoryIterators->createRecursivePhpFileIterator(
            $this->path
        );
        
        foreach ($filePaths as $filePath) {
            $file = $this->files->createFile($this->path, $filePath[0]);
            if ($file->hasClass()) {
                $className = $file->getClassName();
                $reflection = $this->reflections->createReflection($className);
                $reflection->createTests($file->getText());
            }
        }
        
    }
}