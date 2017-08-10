<?php
namespace MemMemov\UnitRobot;

use MemMemov\UnitRobot\Source\Directory as SourceDirectory;
use MemMemov\UnitRobot\UnitTest\Directory as UnitTestDirectory;

class Configuration
{
    private $config;
    
    public function __construct(
        array $config
    ) {
        $this->config = $config;
    }
    
    public function createSourceDirectory()
    {
        return new SourceDirectory($this->config['source']['path']);
    }
    
    public function createUnitTestDirectory()
    {
        return new UnitTestDirectory($this->config['test']['path']);
    }
}