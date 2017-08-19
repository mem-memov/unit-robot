<?php
namespace MemMemov\UnitRobot\Source\File;

use MemMemov\UnitRobot\Source\Reflection\Reflections;
use MemMemov\UnitRobot\UnitTest\File\Directory as UnitTestDirectory;
use MemMemov\UnitRobot\Source\Description\Instance\Instancies;
use MemMemov\UnitRobot\UnitTest\UnitTests;

class Directory
{
    private $path;
    private $directoryIterators;
    private $files;
    private $reflections;
    private $instances;
    private $unitTests;
    
    public function __construct(
        string $path,
        DirectoryIterators $directoryIterators,
        Files $files,
        Reflections $reflections,
        Instancies $instances,
        UnitTests $unitTests
    ) {
        $this->path = $path;
        $this->directoryIterators = $directoryIterators;
        $this->files = $files;
        $this->reflections = $reflections;
        $this->instances = $instances;
        $this->unitTests = $unitTests;
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
                
                if ( ! $reflection->needsDescribing()) {
                    continue;
                }

                $instance = $this->instances->createInstance();
                
                $sourceText = $file->getText();
                
                $reflection->describe(
                    $sourceText,
                    $instance->getName(),
                    $instance->getProperties(),
                    $instance->getMethods(),
                    $instance->getDependencies()
                );
                
                $unitTestFile = $file->createUnitTestFile($unitTestDirectory);
                $unitTest = $this->unitTests->createUnitTest($unitTestFile);
                $instance->createUnitTests($unitTest);
            }
        }
        
    }
}