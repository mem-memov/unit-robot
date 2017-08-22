<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Description\Dependency;

use MemMemov\UnitRobot\Source\Description\Property\ObjectCollectionProperty;
use MemMemov\UnitRobot\Source\Description\Property\Properties;
use MemMemov\UnitRobot\Source\Description\Parameter\ObjectCollectionParameter;
use MemMemov\UnitRobot\Source\Description\Parameter\Parameters;
use MemMemov\UnitRobot\Source\Description\Type\Collection\ObjectArrayType;
use MemMemov\UnitRobot\Source\Description\Type\Types;
use MemMemov\UnitRobot\UnitTest\UnitTest;
use PHPUnit\Framework\TestCase;

final class DependencyTest extends TestCase
{
    protected $namespace;
    protected $class;
    protected $alias;

    protected function setUp(): void
    {
        $this->namespace = 'some $this->namespace value';
        $this->class = 'some $this->class value';
        $this->alias = 'some $this->alias value';
    }

    public function testItCanIsMatching(): void
    {
        $dependency = new Dependency($this->namespace, $this->class, $this->alias);

        $query = 'some $query value';

        $dependency->isMatching($query);
    }

    public function testItCanCreateObjectCollectionProperty(): void
    {
        $dependency = new Dependency($this->namespace, $this->class, $this->alias);

        $name = 'some $name value';
        $properties = $this->createMock(Properties::class);

        $dependency->createObjectCollectionProperty($name, $properties);
    }

    public function testItCanCreateObjectCollectionParameter(): void
    {
        $dependency = new Dependency($this->namespace, $this->class, $this->alias);

        $name = 'some $name value';
        $parameters = $this->createMock(Parameters::class);

        $dependency->createObjectCollectionParameter($name, $parameters);
    }

    public function testItCanCreateObjectArrayType(): void
    {
        $dependency = new Dependency($this->namespace, $this->class, $this->alias);

        $name = 'some $name value';
        $type = $this->createMock(Types::class);

        $dependency->createObjectArrayType($name, $type);
    }

    public function testItCanCreateUnitTests(): void
    {
        $dependency = new Dependency($this->namespace, $this->class, $this->alias);

        $unitTest = $this->createMock(UnitTest::class);

        $dependency->createUnitTests($unitTest);
    }
}