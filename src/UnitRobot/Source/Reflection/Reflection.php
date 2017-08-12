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
        $unitTestFile->create(
            '<?php' . "\n"
            . 'declare(strict_types=1);' . "\n"
            . "\n"
            . 'namespace ' . $this->class->getNamespaceName() . ';' . "\n"
            . "\n"
            . 'use PHPUnit\Framework\TestCase;' . "\n"
            . "\n"
            . 'class ' . $this->class->getShortName() . 'Test extends TestCase' . "\n"
            . '{' . "\n"
            . '}'
        );
        
        $methodReflections = $this->class->getMethods(\ReflectionMethod::IS_PUBLIC);
        
        foreach ($methodReflections as $methodReflection) {
            $method = $this->methods->createMethod($methodReflection);
            $method->createTests($sourceText);
        }
    }
}