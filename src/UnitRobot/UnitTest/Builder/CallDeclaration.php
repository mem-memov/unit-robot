<?php
namespace MemMemov\UnitRobot\UnitTest\Builder;

use MemMemov\UnitRobot\UnitTest\File\Text;

interface CallDeclaration
{
    public function appendExpectation(Text $text): void;
}