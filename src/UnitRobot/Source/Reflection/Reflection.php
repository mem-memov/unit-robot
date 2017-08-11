<?php
namespace MemMemov\UnitRobot\Source\Reflection;

use MemMemov\UnitRobot\Source\File\Text;
use MemMemov\UnitRobot\UnitTest\File as UnitTestFile;

class Reflection
{
    private $class;
    private $methods;
    
    public function __construct(
        \ReflectionClass $class,
        Methods $methods
    ) {
        $this->class = $class;
        $this->methods = $methods;
    }
    
    public function createTests(Text $sourceText, UnitTestFile $unitTestFile)
    {
        $unitTestFile->create();
        
        $methodReflections = $this->class->getMethods(\ReflectionMethod::IS_PUBLIC);
        
        foreach ($methodReflections as $methodReflection) {
            $method = $this->methods->createMethod($methodReflection);
            $method->createTests($sourceText);
        }
    }
}