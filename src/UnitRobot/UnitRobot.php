<?php
namespace MemMemov\UnitRobot;

class UnitRobot
{
    private $configuration;
    
    public function __construct(
        Configuration $configuration
    ) {
        $this->configuration = $configuration;
    }
    
    public function createTests()
    {
        $sourceDirectory = $this->configuration->createSourceDirectory();
        
        $unitTestDirectory = $this->configuration->createUnitTestDirectory();
        
        $sourceDirectory->createTests($unitTestDirectory);
    }
}