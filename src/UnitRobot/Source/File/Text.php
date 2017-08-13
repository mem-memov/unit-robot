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
        if ($startLine <= 0 || $endLine <= 0) {
            throw new \Exception('text starts with line one');
        }
        if ($endLine < $startLine) {
            throw new \Exception('text start cannot follow text end');
        }
        
        $length = $endLine - $startLine + 1;
        $extraction = array_slice($this->lines, $startLine, $length);
        
        $string = implode("\n", $extraction);

        return $string;
    }
}