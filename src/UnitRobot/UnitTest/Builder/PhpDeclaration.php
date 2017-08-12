<?php
namespace MemMemov\UnitRobot\UnitTest\Builder;

use MemMemov\UnitRobot\UnitTest\File\Text;

class PhpDeclaration
{
    public function append(Text $text) 
    {
        $text->appendLine('<?php');
        $text->appendLine('declare(strict_types=1);');
        $text->appendLine('');
    }
}


