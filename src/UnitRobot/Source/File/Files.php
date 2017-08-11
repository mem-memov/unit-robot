<?php
namespace MemMemov\UnitRobot\Source\File;

class Files
{
    private $texts;
    
    public function __construct(
        Texts $texts
    ) {
        $this->texts = $texts;
    }
    
    public function createFile(
        string $rootPath, 
        string $filePath
    ): File
    {
        $fileName = basename($filePath);

        $pathWithFileName = substr($filePath, strlen($rootPath));
        
        $path = substr($pathWithFileName, 0, - strlen($fileName) - 1);
        
        $content = file_get_contents($filePath);
        
        return new File(
            $rootPath, 
            $path, 
            $fileName, 
            $content, 
            $this->texts
        );
    }
}