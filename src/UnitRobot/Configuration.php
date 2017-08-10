<?php
namespace MemMemov\UnitRobot;

use MemMemov\UnitRobot\Source\Directory as SourceDirectory;
use MemMemov\UnitRobot\UnitTest\Directory as UnitTestDirectory;
use MemMemov\UnitRobot\Source\DirectoryIterators as SourceDirectoryIterators;
use MemMemov\UnitRobot\Source\Files as SourceFiles;

class Configuration
{
    private $config;
    
    public function __construct(
        array $config
    ) {
        $this->config = $config;
    }
    
    public function createSourceDirectory(): SourceDirectory
    {
        return new SourceDirectory(
            $this->config['source']['path'],
            new SourceDirectoryIterators(),
            new SourceFiles()
        );
    }
    
    public function createUnitTestDirectory(): UnitTestDirectory
    {
        return new UnitTestDirectory($this->config['test']['path']);
    }
}