<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Description\Property;

use PHPUnit\Framework\TestCase;

final class PropertiesTest extends TestCase
{
    public function testItCanCreateArrayProperty(): void
    {
        $properties = new Properties();

        $name = 'some $name value';

        $properties->createArrayProperty($name);
    }

    public function testItCanCreateScalarCollectionProperty(): void
    {
        $properties = new Properties();

        $name = 'some $name value';
        $type = 'some $type value';

        $properties->createScalarCollectionProperty($name, $type);
    }

    public function testItCanCreateObjectCollectionProperty(): void
    {
        $properties = new Properties();

        $name = 'some $name value';
        $type = 'some $type value';

        $properties->createObjectCollectionProperty($name, $type);
    }

    public function testItCanCreateDependencyCollectionProperty(): void
    {
        $properties = new Properties();

        $name = 'some $name value';
        $dependency = $this->createMock(Dependency::class);

        $properties->createDependencyCollectionProperty($name, $dependency);
    }

    public function testItCanCreateScalarProperty(): void
    {
        $properties = new Properties();

        $name = 'some $name value';

        $properties->createScalarProperty($name);
    }

    public function testItCanCreateObjectProperty(): void
    {
        $properties = new Properties();

        $name = 'some $name value';
        $namespace = 'some $namespace value';
        $class = 'some $class value';
        $alias = 'some $alias value';

        $properties->createObjectProperty($name, $namespace, $class, $alias);
    }
}