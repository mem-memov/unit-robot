<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Description;

use PHPUnit\Framework\TestCase;

final class PropertiesTest extends TestCase
{
    public function testItCanCreateArrayProperty(): void
    {
        $properties = new Properties();

        $name = 'some $name value';

        $properties->createArrayProperty($name);
    }

    public function testItCanCreateCollectionProperty(): void
    {
        $properties = new Properties();

        $name = 'some $name value';
        $type = 'some $type value';

        $properties->createCollectionProperty($name, $type);
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