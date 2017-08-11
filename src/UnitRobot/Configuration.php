<?php
namespace MemMemov\UnitRobot;

use MemMemov\UnitRobot\Source\File\Directories as SourceDirectories;
use MemMemov\UnitRobot\Source\File\Directory as SourceDirectory;
use MemMemov\UnitRobot\UnitTest\Directory as UnitTestDirectory;

class Configuration
{
    private $config;
    private $sourceDirectories;
    
    public function __construct(
        array $config,
        SourceDirectories $sourceDirectories
    ) {
        $this->config = $config;
        $this->sourceDirectories = $sourceDirectories;
    }
    
    public function createSourceDirectory(): SourceDirectory
    {
        return $this->sourceDirectories->createDirectory(
            $this->config['source']['path']
        );
    }
    
    public function createUnitTestDirectory(): UnitTestDirectory
    {
        return new UnitTestDirectory($this->config['test']['path']);
    }
}