<?php
namespace MemMemov\UnitRobot\Source\Reflection;

use MemMemov\UnitRobot\Source\Reflection\Constructor\ClassConstructors;
use MemMemov\UnitRobot\Source\Reflection\Method\Methods;
use MemMemov\UnitRobot\Source\File\Text;
use MemMemov\UnitRobot\UnitTest\File\File as UnitTestFile;
use MemMemov\UnitRobot\UnitTest\UnitTests;
use MemMemov\UnitRobot\Source\Description\Instance\InstanceName;
use MemMemov\UnitRobot\Source\Description\Instance\InstanceProperties;
use MemMemov\UnitRobot\Source\Description\Instance\InstanceMethods;
use MemMemov\UnitRobot\Source\Description\Instance\InstanceDependencies;

class Reflection
{
    private $class;
    private $dependencies;
    private $methods;
    private $unitTests;
    private $constructors;
    
    public function __construct(
        \ReflectionClass $class,
        Dependencies $dependencies,
        Methods $methods,
        UnitTests $unitTests,
        ClassConstructors $constructors
    ) {
        $this->class = $class;
        $this->dependencies = $dependencies;
        $this->methods = $methods;
        $this->unitTests = $unitTests;
        $this->constructors = $constructors;
    }
    
    public function createTests(Text $sourceText, UnitTestFile $unitTestFile)
    {
        if ($this->class->isAbstract() || $this->class->isInterface()) {
            return;
        }
        
        $unitTest = $this->unitTests->createUnitTest($unitTestFile);
        $unitTest->setNamespace($this->class->getNamespaceName());
        $unitTest->setClassName($this->class->getShortName());
        
        $this->dependencies->addDependenciesToUnitTest($sourceText, $unitTest);
 
        //$constructor = $this->methods->createConstructor($this->class);
        //$constructor->createTest($sourceText, $unitTest);
 
        $methodReflections = $this->class->getMethods(\ReflectionMethod::IS_PUBLIC);

        foreach ($methodReflections as $methodReflection) {
            if ($methodReflection->isConstructor()) {
                continue;
            }
            
            $method = $this->methods->createMethod(
                $methodReflection, 
                $this->class->getShortName()
            );
            $method->createTest($sourceText, $unitTest);
        }
        
        $unitTest->write();
    }
    
    public function needsDescribing(): bool
    {
        return !$this->class->isAbstract() & !$this->class->isInterface();
    }
    
    public function describe(
        Text $sourceText, 
        InstanceName $name,
        InstanceProperties $properties,
        InstanceMethods $methods,
        InstanceDependencies $dependencies
    ): void
    {
        $name->setNamespace($this->class->getNamespaceName());
        $name->setClass($this->class->getShortName());

        $this->dependencies->describe($sourceText, $dependencies);
        
        $constructor = $this->constructors->createConstructor($this->class);
        $constructor->describeProperties($sourceText, $dependencies, $properties);
    }
}