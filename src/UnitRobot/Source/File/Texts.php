<?php
namespace MemMemov\UnitRobot\Source\File;

class Texts
{
    public function createText(string $content): Text
    {
        $lines = explode("\n", $content);
        
        return new Text($lines);
    }
}

