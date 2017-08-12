<?php
namespace MemMemov\UnitRobot\Source\Reflection;

use MemMemov\UnitRobot\Source\File\Text;
use MemMemov\UnitRobot\UnitTest\File\File as UnitTestFile;
use MemMemov\UnitRobot\UnitTest\UnitTests;

class Reflection
{
    private $class;
    private $methods;
    private $unitTests;
    
    public function __construct(
        \ReflectionClass $class,
        Methods $methods,
        UnitTests $unitTests
    ) {
        $this->class = $class;
        $this->methods = $methods;
        $this->unitTests = $unitTests;
    }
    
    public function createTests(Text $sourceText, UnitTestFile $unitTestFile)
    {
        $unitTest = $this->unitTests->createUnitTest($unitTestFile);
        $unitTest->setNamespace($this->class->getNamespaceName());
        $unitTest->setClassName($this->class->getShortName());

        $methodReflections = $this->class->getMethods(\ReflectionMethod::IS_PUBLIC);
        
        foreach ($methodReflections as $methodReflection) {
            $method = $this->methods->createMethod($methodReflection);
            $method->createTests($sourceText);
        }
        
        $unitTest->write();
    }
}