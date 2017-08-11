<?php
namespace MemMemov\UnitRobot\Source\File;

class Text
{
    private $lines;
    
    public function __construct(
        array $lines
    ) {
        $this->lines = $lines;
    }
    
    public function extract(int $startLine, int $endLine): string
    {
        $length = $endLine - $startLine;
        $extraction = array_slice($this->lines, $startLine, $length);
        
        return implode("\n", $extraction);
    }
}