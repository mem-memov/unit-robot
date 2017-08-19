<?php
namespace MemMemov\UnitRobot\Source\Reflection;

use MemMemov\UnitRobot\Source\Reflection\Constructor\ClassConstructors;
use MemMemov\UnitRobot\Source\Reflection\Method\Methods;
use MemMemov\UnitRobot\Source\File\Text;
use MemMemov\UnitRobot\Source\Description\Instance\InstanceName;
use MemMemov\UnitRobot\Source\Description\Instance\InstanceProperties;
use MemMemov\UnitRobot\Source\Description\Instance\InstanceMethods;
use MemMemov\UnitRobot\Source\Description\Instance\InstanceDependencies;
use MemMemov\UnitRobot\Source\Description\Instance\Instancies;
use MemMemov\UnitRobot\Source\Description\Instance\Instance;

class Reflection
{
    private $class;
    private $dependencies;
    private $methods;
    private $constructors;
    private $instances;
    
    public function __construct(
        \ReflectionClass $class,
        Dependencies $dependencies,
        Methods $methods,
        ClassConstructors $constructors,
        Instancies $instances
    ) {
        $this->class = $class;
        $this->dependencies = $dependencies;
        $this->methods = $methods;
        $this->constructors = $constructors;
        $this->instances = $instances;
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
        Text $sourceText
    ): Instance
    {
        $instanceName = $this->instances->createInstanceName(
            $this->class->getNamespaceName(),
            $this->class->getShortName()
        );

        $instanceDependencies = $this->instances->createInstanceDependencies();
        $this->dependencies->describe($sourceText, $instanceDependencies);
        
        $instanceProperties = $this->instances->createInstanceProperties();
        $constructor = $this->constructors->createConstructor($this->class);
        $constructor->describeProperties(
            $sourceText, 
            $instanceDependencies, 
            $instanceProperties
        );
        
        $instanceMethods = $this->instances->createInstanceMethods();
        $methodReflections = $this->class->getMethods(\ReflectionMethod::IS_PUBLIC);
/*
        foreach ($methodReflections as $methodReflection) {
            if ($methodReflection->isConstructor()) {
                continue;
            }
            
            $method = $this->methods->createMethod(
                $methodReflection, 
                $this->class->getShortName()
            );
            
            $signature = $this->signatures->createSignature();
            
            try {
                $signature = $method->describeSignature($signature);
            } catch ($e) {
                continue;
            }
            
            $instanceMethods->addSignature($signature);
        }
 */       
        return $this->instances->createInstance(
            $instanceName,
            $instanceProperties,
            $instanceMethods,
            $instanceDependencies
        );
    }
}