<?php
namespace MemMemov\UnitRobot\Source\Reflection;

use MemMemov\UnitRobot\Source\File\Text;
use MemMemov\UnitRobot\UnitTest\UnitTest;
use MemMemov\UnitRobot\Source\Description\Instance\InstanceDependencies;
use MemMemov\UnitRobot\Source\Description\Dependency\Dependencies as DescriptionDependencies;
use MemMemov\UnitRobot\Source\Description\Instance\Instancies;

class Dependencies
{
    private $class;
    private $descriptionDependencies;
    private $instancies;
    
    public function __construct(
        \ReflectionClass $class,
        DescriptionDependencies $descriptionDependencies,
        Instancies $instancies
    ) {
        $this->class = $class;
        $this->descriptionDependencies = $descriptionDependencies;
        $this->instancies = $instancies;
    }

    public function describe(
        Text $sourceText
    ): InstanceDependencies
    {
        $instanceDependencies = $this->instancies->createInstanceDependencies();
        
        $prelude = $sourceText->extract(1, $this->class->getStartLine() - 1);
        
        preg_match_all('/(use\s(.+)(\sas\s(.+))*;)/U', $prelude, $matches);
        
        foreach ($matches[0] as $index => $match) {
            
            $fullClassName = $matches[2][$index];
            $alias = $matches[4][$index];
            
            $lastSlashPosition = strrpos($fullClassName, '\\');
            
            if (false === $lastSlashPosition) {
                $namespace = '';
                $className = $fullClassName;
            } else {
                $namespace = substr($fullClassName, 0, $lastSlashPosition);
                $className = substr($fullClassName, $lastSlashPosition + 1);
            }

            $instanceDependency = $this->descriptionDependencies->createDependency(
                $namespace, 
                $className, 
                $alias
            );
            
            $instanceDependencies->addDependency($instanceDependency);
        }
        
        return $instanceDependencies;
    }
}