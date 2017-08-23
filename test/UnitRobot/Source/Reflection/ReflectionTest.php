<?php
declare(strict_types=1);

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
use PHPUnit\Framework\TestCase;

final class ReflectionTest extends TestCase
{
    protected $class;
    protected $dependencies;
    protected $methods;
    protected $constructors;
    protected $instances;

    protected function setUp(): void
    {
        $this->class = $this->createMock(\ReflectionClass::class);
        $this->dependencies = $this->createMock(Dependencies::class);
        $this->methods = $this->createMock(Methods::class);
        $this->constructors = $this->createMock(ClassConstructors::class); 
        $this->instances = $this->createMock(Instancies::class);
    }

    public function testItCanNeedsDescribing(): void
    {
        $reflection = new Reflection($this->class, $this->dependencies, $this->methods, $this->constructors, $this->instances);

        $reflection->needsDescribing();
    }

    public function testItCanDescribe(): void
    {
        $reflection = new Reflection($this->class, $this->dependencies, $this->methods, $this->constructors, $this->instances);

        $sourceText = $this->createMock(Text::class);

        $reflection->describe($sourceText);
    }
}