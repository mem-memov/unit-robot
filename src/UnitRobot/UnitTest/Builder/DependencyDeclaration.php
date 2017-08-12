<?php
namespace MemMemov\UnitRobot\UnitTest\Builder;

use MemMemov\UnitRobot\UnitTest\File\Text;

class DependencyDeclaration
{
    public function append(Text $text) 
    {
        $text->appendLine('');
    }
}