<?php
namespace MemMemov\UnitRobot\UnitTest\File;

class Text
{
    private $lines;
    
    public function __construct()
    {
        $this->lines = [];
    }
    
    public function appendLine(string $line): void
    {
        $this->lines[] = $line;
    }
    
    public function writeToFile(File $file): void
    {
        $content = implode("\n", $this->lines);
        
        $file->create($content);
    }
}