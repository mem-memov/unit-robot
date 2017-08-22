<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection;

use MemMemov\UnitRobot\Source\Reflection\Constructor\ClassConstructors;
use MemMemov\UnitRobot\Source\Reflection\Method\Methods;
use MemMemov\UnitRobot\Source\Description\Dependency\Dependencies as DescriptionDependencies;
use MemMemov\UnitRobot\Source\Description\Instance\Instancies;
use PHPUnit\Framework\TestCase;

final class ReflectionsTest extends TestCase
{
    protected $methods;
    protected $descriptionDependencies;
    protected $constructors;
    protected $instances;

    protected function setUp(): void
    {
        $this->methods = $this->createMock(Methods::class);
        $this->descriptionDependencies = $this->createMock(DescriptionDependencies::class);
        $this->constructors = $this->createMock(ClassConstructors::class);
        $this->instances = $this->createMock(Instancies::class);
    }

    public function testItCanCreateReflection(): void
    {
        $reflections = new Reflections($this->methods, $this->descriptionDependencies, $this->constructors, $this->instances);

        $className = 'some $className value';

        $reflections->createReflection($className);
    }
}