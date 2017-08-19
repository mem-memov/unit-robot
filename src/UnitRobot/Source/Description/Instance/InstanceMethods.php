<?php
namespace MemMemov\UnitRobot\Source\Description\Instance;

use MemMemov\UnitRobot\Source\Description\Signature\Signature;

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
}