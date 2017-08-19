<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Description\Property;

use MemMemov\UnitRobot\Source\Description\Type\Types;
use PHPUnit\Framework\TestCase;

final class PropertiesTest extends TestCase
{
    public function testItCanCreateArrayProperty(): void
    {
        $properties = new Properties();

        $name = 'some $name value';

        $this->type = 'some $this->type value';

        $this->types->expects($this->once())
            ->method('createArrayType')
            ->willReturn($this->type);

        $properties->createArrayProperty($name);
    }

    public function testItCanCreateObjectCollectionProperty(): void
    {
        $properties = new Properties();

        $name = 'some $name value';
        $namespace = 'some $namespace value';
        $class = 'some $class value';
        $alias = 'some $alias value';

        $this->itemType = 'some $this->itemType value';

        $this->types->expects($this->once())
            ->method('createObjectType')
            ->willReturn($this->itemType);

        $this->type = 'some $this->type value';

        $this->types->expects($this->once())
            ->method('createObjectArrayType')
            ->willReturn($this->type);

        $properties->createObjectCollectionProperty($name, $namespace, $class, $alias);
    }

    public function testItCanCreateObjectProperty(): void
    {
        $properties = new Properties();

        $name = 'some $name value';
        $namespace = 'some $namespace value';
        $class = 'some $class value';
        $alias = 'some $alias value';

        $this->type = 'some $this->type value';

        $this->types->expects($this->once())
            ->method('createObjectType')
            ->willReturn($this->type);

        $properties->createObjectProperty($name, $namespace, $class, $alias);
    }

    public function testItCanCreateScalarCollectionProperty(): void
    {
        $properties = new Properties();

        $name = 'some $name value';
        $type = 'some $type value';

        $this->scalarType = 'some $this->scalarType value';

        $this->types->expects($this->once())
            ->method('createScalarType')
            ->willReturn($this->scalarType);

        $properties->createScalarCollectionProperty($name, $type);
    }

    public function testItCanCreateScalarProperty(): void
    {
        $properties = new Properties();

        $name = 'some $name value';
        $type = 'some $type value';

        $this->scalarType = 'some $this->scalarType value';

        $this->types->expects($this->once())
            ->method('createScalarType')
            ->willReturn($this->scalarType);

        $properties->createScalarProperty($name, $type);
    }
}