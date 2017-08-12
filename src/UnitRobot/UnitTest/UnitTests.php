<?php
namespace MemMemov\UnitRobot\UnitTest;

use MemMemov\UnitRobot\Declarations;
use MemMemov\UnitRobot\Builders;

class UnitTests
{
    private $declarations;
    private $builders;
    
    public function __construct(
        Declarations $declarations,
        Builders $builders
    ) {
        $this->declarations = $declarations;
        $this->builders = $builders;
    }
    
    public function createUnitTest(): UnitTest
    {
        $builder = $this->builders->createBuilder();
        
        return new UnitTest(
            $this->declarations,
            $builder
        );
    }
}