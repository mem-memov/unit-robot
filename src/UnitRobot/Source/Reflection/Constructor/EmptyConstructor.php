<?php
namespace MemMemov\UnitRobot\Source\Reflection\Constructor;

use MemMemov\UnitRobot\Source\Reflection\Parameter\Parameters;
use MemMemov\UnitRobot\Source\File\Text;
use MemMemov\UnitRobot\UnitTest\UnitTest;
use MemMemov\UnitRobot\Source\Description\Instance\InstanceProperties;
use MemMemov\UnitRobot\Source\Description\Instance\InstanceDependencies;

class EmptyConstructor implements Constructor
{
    private $className;
    private $parameters;
    
    public function __construct(
        string $className,
        Parameters $parameters
    ) {
        $this->className = $className;
        $this->parameters = $parameters;
    }
    
    public function createTest(Text $text, UnitTest $unitTest): void
    {
        
    }
    
    public function describeProperties(
        Text $text,
        InstanceDependencies $dependencies,
        InstanceProperties $properties
    ): void
    {
        
    }
}