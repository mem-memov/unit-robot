<?php
namespace MemMemov\UnitRobot\Source\Description\Property;

use MemMemov\UnitRobot\UnitTest\UnitTest;

interface Property
{
    public function createUnitTests(UnitTest $unitTest): void;
}