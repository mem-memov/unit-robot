<?php
namespace MemMemov\UnitRobot\Source\Reflection;

use MemMemov\UnitRobot\Source\File\Text;
use MemMemov\UnitRobot\UnitTest\UnitTest;
use MemMemov\UnitRobot\Source\Description\InstanceDependencies;
use MemMemov\UnitRobot\Source\Description\Dependencies as DescriptionDependencies;

class Dependencies
{
    private $class;
    private $descriptionDependencies;
    
    public function __construct(
        \ReflectionClass $class,
        DescriptionDependencies $descriptionDependencies
    ) {
        $this->class = $class;
        $this->descriptionDependencies = $descriptionDependencies;
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
    
    public function describe(
        Text $sourceText,
        InstanceDependencies $instanceDependencies
    ): void
    {
        $prelude = $sourceText->extract(1, $this->class->getStartLine() - 1);
        
        preg_match_all('/(use\s(.+)(\sas\s(.+))*;)/U', $prelude, $matches);
        
        foreach ($matches[0] as $index => $match) {
            
            $fullClassName = $matches[2][$index];
            $alias = $matches[4][$index];
            
            $lastSlashPosition = strrpos($fullClassName, '\\');
            
            $namespace = substr($fullClassName, 0, $lastSlashPosition);
            $className = substr($fullClassName, $lastSlashPosition + 1);
            
            $instanceDependency = $this->descriptionDependencies->createDependency($namespace, $className, $alias);
            $instanceDependencies->addDependency($instanceDependency);
        }
    }
}