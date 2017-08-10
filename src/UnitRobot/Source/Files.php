<?php
namespace MemMemov\UnitRobot\Source;

class Files
{
    public function createFile(
        string $rootPath, 
        string $filePath
    ): File
    {
        $fileName = basename($filePath);

        $pathWithFileName = substr($filePath, strlen($rootPath));
        
        $path = substr($pathWithFileName, 0, - strlen($fileName) - 1);
        
        return new File($rootPath, $path, $fileName);
    }
}