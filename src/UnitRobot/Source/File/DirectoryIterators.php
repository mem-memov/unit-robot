<?php
namespace MemMemov\UnitRobot\Source\File;

class DirectoryIterators
{
    public function createRecursivePhpFileIterator(string $directoryPath): \RegexIterator
    {
        $directories = new \RecursiveDirectoryIterator($directoryPath);
        $iterators = new \RecursiveIteratorIterator($directories);
        $files = new \RegexIterator($iterators, '/.*\.php/', \RegexIterator::GET_MATCH);
        
        return $files;
    }
}