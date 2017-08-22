<?php
namespace MemMemov\UnitRobot\Source\File;

use MemMemov\UnitRobot\Source\Reflection\Reflections;
use MemMemov\UnitRobot\UnitTest\File\Directory as UnitTestDirectory;
use MemMemov\UnitRobot\UnitTest\UnitTests;

class Directory
{
    private $path;
    private $directoryIterators;
    private $files;
    private $reflections;
    private $unitTests;
    private $classFilter;
    
    public function __construct(
        string $path,
        DirectoryIterators $directoryIterators,
        Files $files,
        Reflections $reflections,
        UnitTests $unitTests,
        string $classFilter = null
    ) {
        $this->path = $path;
        $this->directoryIterators = $directoryIterators;
        $this->files = $files;
        $this->reflections = $reflections;
        $this->unitTests = $unitTests;
        $this->classFilter = $classFilter;
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

                if (!is_null($this->classFilter) && ('\\' . $this->classFilter) !== $className) {
                    continue;
                }
                
                $reflection = $this->reflections->createReflection($className);
                
                if ( ! $reflection->needsDescribing()) {
                    continue;
                }

                $sourceText = $file->getText();
                
                $instance = $reflection->describe($sourceText);

                $unitTestFile = $file->createUnitTestFile($unitTestDirectory);
                
                $unitTest = $this->unitTests->createUnitTest($unitTestFile);
                
                $instance->createUnitTests($unitTest);
            }
        }
        
    }
}