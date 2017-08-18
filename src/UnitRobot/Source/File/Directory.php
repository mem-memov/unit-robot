<?php
namespace MemMemov\UnitRobot\Source\File;

use MemMemov\UnitRobot\Source\Reflection\Reflections;
use MemMemov\UnitRobot\UnitTest\File\Directory as UnitTestDirectory;
use MemMemov\UnitRobot\Source\Description\Instancies;

class Directory
{
    private $path;
    private $directoryIterators;
    private $files;
    private $reflections;
    private $instances;
    
    public function __construct(
        string $path,
        DirectoryIterators $directoryIterators,
        Files $files,
        Reflections $reflections,
        Instancies $instances
    ) {
        $this->path = $path;
        $this->directoryIterators = $directoryIterators;
        $this->files = $files;
        $this->reflections = $reflections;
        $this->instances = $instances;
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
                
                $unitTestFile = $file->createUnitTestFile($unitTestDirectory);
                
                $sourceText = $file->getText();
                $reflection->createTests($sourceText, $unitTestFile); 
                
                if ($reflection->needsDescribing()) {
                    $instance = $this->instances->createInstance();
                    $reflection->describe(
                        $instance->getName(),
                        $instance->getProperties(),
                        $instance->getMethods(),
                        $instance->getDependencies()
                    );
                }
            }
        }
        
    }
}