<?php
namespace MemMemov\UnitRobot\UnitTest;

class Files
{
    public function create(string $rootPath, string $path, string $name): File
    {
        return new File($rootPath, $path, $name);
    }
}