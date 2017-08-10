<?php
namespace MemMemov\UnitRobot\Source;

use MemMemov\UnitRobot\UnitTest\Directory as UnitTestDirectory;

class Directory
{
    private $path;
    
    public function __construct(
        string $path
    ) {
        $this->path = $path;
    }
    
    public function createTests(UnitTestDirectory $unitTestDirectory)
    {
        
    }
}