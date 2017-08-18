<?php
namespace MemMemov\UnitRobot\Source\Reflection\Method\Constructor;

use MemMemov\UnitRobot\Source\File\Text;
use MemMemov\UnitRobot\UnitTest\UnitTest;
use MemMemov\UnitRobot\Source\Description\InstanceProperties;

interface Constructor
{
    public function createTest(Text $text, UnitTest $unitTest): void;
    
    public function describeProperties(
        Text $text,
        InstanceProperties $properties
    ): void;
}