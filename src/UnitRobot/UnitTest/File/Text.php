<?php
namespace MemMemov\UnitRobot\UnitTest\File;

class Text
{
    private const INDENT = '    ';
    private $lines;
    
    public function __construct()
    {
        $this->lines = [];
    }
    
    public function appendLine(string $line, int $offset = 0): void
    {
        $this->lines[] = str_repeat(self::INDENT, $offset) . $line;
    }
    
    public function writeToFile(File $file): void
    {
        $content = implode("\n", $this->lines);
        
        $file->create($content);
    }
}