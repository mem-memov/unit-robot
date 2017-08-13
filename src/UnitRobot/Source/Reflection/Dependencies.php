<?php
namespace MemMemov\UnitRobot\Source\Reflection;

use MemMemov\UnitRobot\Source\File\Text;
use MemMemov\UnitRobot\UnitTest\UnitTest;

class Dependencies
{
    private $class;
    
    public function __construct(
        \ReflectionClass $class
    ) {
        $this->class = $class;
    }
    
    public function addDependenciesToUnitTest(
        Text $sourceText, 
        UnitTest $unitTest
    ): void
    {
        $prelude = $sourceText->extract(1, $this->class->getStartLine() - 1);
        
        preg_match_all('/(use .+;)/', $prelude, $matches);
        
        foreach ($matches[1] as $useStatement) {
            $unitTest->addDependency($useStatement);
        }
    }
}