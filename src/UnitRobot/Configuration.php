<?php
namespace MemMemov\UnitRobot;

use MemMemov\UnitRobot\Source\File\Directories as SourceDirectories;
use MemMemov\UnitRobot\Source\File\Directory as SourceDirectory;
use MemMemov\UnitRobot\UnitTest\Directories as UnitTestDirectories;
use MemMemov\UnitRobot\UnitTest\Directory as UnitTestDirectory;

class Configuration
{
    private $config;
    private $sourceDirectories;
    
    public function __construct(
        array $config,
        SourceDirectories $sourceDirectories,
        UnitTestDirectories $unitTestDirectories
    ) {
        $this->config = $config;
        $this->sourceDirectories = $sourceDirectories;
        $this->unitTestDirectories = $unitTestDirectories;
    }
    
    public function createSourceDirectory(): SourceDirectory
    {
        return $this->sourceDirectories->createDirectory(
            $this->config['sourcePath']
        );
    }
    
    public function createUnitTestDirectory(): UnitTestDirectory
    {
        return $this->unitTestDirectories->createDirectory(
            $this->config['testPath']
        );
    }
}