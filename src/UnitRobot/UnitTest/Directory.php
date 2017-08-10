<?php
namespace MemMemov\UnitRobot\UnitTest;

class Directory
{
    private $path;
    
    public function __construct(
        string $path
    ) {
        $this->path = $path;
    }
}