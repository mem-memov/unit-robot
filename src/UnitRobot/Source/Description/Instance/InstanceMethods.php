<?php
namespace MemMemov\UnitRobot\Source\Description\Instance;

use MemMemov\UnitRobot\Source\Description\Signature\Signature;
use MemMemov\UnitRobot\UnitTest\UnitTest;

class InstanceMethods
{
    private $signatures;
    
    public function __construct()
    {
        $this->signatures = [];
    }
    
    public function addSignature(Signature $signature): void
    {
        $this->signatures[] = $signature;
    }
    
    public function createUnitTests(UnitTest $unitTest, string $class): void
    {
        foreach ($this->signatures as $signature) {
            $signature->createUnitTests($unitTest, $class);
        }
    }
}