<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Description\Property;

use MemMemov\UnitRobot\Source\Description\Type\Types;
use PHPUnit\Framework\TestCase;

final class PropertiesTest extends TestCase
{
    protected $types;

    protected function setUp(): void
    {
        $this->types = $this->createMock(Types::class);
    }

    public function testItCanCreateArrayProperty(): void
    {
        $properties = new Properties($this->types);

        $name = 'some $name value';

        $properties->createArrayProperty($name);
    }

    public function testItCanCreateObjectCollectionProperty(): void
    {
        $properties = new Properties($this->types);

        $name = 'some $name value';
        $namespace = 'some $namespace value';
        $class = 'some $class value';
        $alias = 'some $alias value';

        $properties->createObjectCollectionProperty($name, $namespace, $class, $alias);
    }

    public function testItCanCreateObjectProperty(): void
    {
        $properties = new Properties($this->types);

        $name = 'some $name value';
        $namespace = 'some $namespace value';
        $class = 'some $class value';
        $alias = 'some $alias value';

        $properties->createObjectProperty($name, $namespace, $class, $alias);
    }

    public function testItCanCreateScalarCollectionProperty(): void
    {
        $properties = new Properties($this->types);

        $name = 'some $name value';
        $type = 'some $type value';

        $properties->createScalarCollectionProperty($name, $type);
    }

    public function testItCanIsScalarType(): void
    {
        $properties = new Properties($this->types);

        $name = 'some $name value';

        $properties->isScalarType($name);
    }

    public function testItCanCreateScalarProperty(): void
    {
        $properties = new Properties($this->types);

        $name = 'some $name value';
        $type = 'some $type value';

        $properties->createScalarProperty($name, $type);
    }
}