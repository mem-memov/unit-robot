<?php
namespace MemMemov\UnitRobot\Source\Description;

class Block implements Executable
{
    private $executables;
    
    public function __construct()
    {
        $executables = [];
    }
}