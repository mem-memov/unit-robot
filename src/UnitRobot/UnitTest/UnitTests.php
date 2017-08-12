<?php
namespace MemMemov\UnitRobot\UnitTest;

use MemMemov\UnitRobot\UnitTest\Builder\Declarations;
use MemMemov\UnitRobot\UnitTest\Builder\Builders;
use MemMemov\UnitRobot\UnitTest\File\File;
use MemMemov\UnitRobot\UnitTest\File\Texts;

class UnitTests
{
    private $declarations;
    private $builders;
    private $texts;
    
    public function __construct(
        Declarations $declarations,
        Builders $builders,
        Texts $texts
    ) {
        $this->declarations = $declarations;
        $this->builders = $builders;
        $this->texts = $texts;
    }
    
    public function createUnitTest(File $file): UnitTest
    {
        $builder = $this->builders->createBuilder();
        
        $text = $this->texts->createText();
        
        return new UnitTest(
            $this->declarations,
            $builder,
            $text,
            $file
        );
    }
}