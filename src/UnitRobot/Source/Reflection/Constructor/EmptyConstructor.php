<?php
namespace MemMemov\UnitRobot\Source\Reflection\Constructor;

use MemMemov\UnitRobot\Source\File\Text;
use MemMemov\UnitRobot\Source\Description\Instance\InstanceProperties;
use MemMemov\UnitRobot\Source\Description\Instance\InstanceDependencies;
use MemMemov\UnitRobot\Source\Description\Instance\Instancies;

class EmptyConstructor implements Constructor
{
    private $instances;
    
    public function __construct(
        Instancies $instances
    ) {
        $this->instances = $instances;
    }
    
    public function describeProperties(
        Text $text,
        InstanceDependencies $dependencies
    ): InstanceProperties
    {
        return $this->instances->createInstanceProperties();
    }
}