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
        $length = $endLine - $startLine + 1;
        $extraction = array_slice($this->lines, $startLine, $length);
        
        $string = implode("\n", $extraction);
        var_dump($string);
        return $string;
    }
}