<?php
namespace MemMemov\UnitRobot\Source\Reflection\Constructor;

use MemMemov\UnitRobot\Source\File\Text;
use MemMemov\UnitRobot\UnitTest\UnitTest;
use MemMemov\UnitRobot\Source\Description\Instance\InstanceProperties;
use MemMemov\UnitRobot\Source\Description\Instance\InstanceDependencies;

interface Constructor
{
    public function createTest(Text $text, UnitTest $unitTest): void;
    
    public function describeProperties(
        Text $text,
        InstanceDependencies $dependencies,
        InstanceProperties $properties
    ): void;
}