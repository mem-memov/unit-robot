<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Description\Parameter;

use MemMemov\UnitRobot\Source\Description\Type\Types;
use PHPUnit\Framework\TestCase;

final class ParametersTest extends TestCase
{
    public function testItCanCreateArrayParameter(): void
    {
        $parameters = new Parameters();

        $name = 'some $name value';

        $this->type = 'some $this->type value';

        $this->types->expects($this->once())
            ->method('createArrayType')
            ->willReturn($this->type);

        $parameters->createArrayParameter($name);
    }

    public function testItCanCreateObjectCollectionParameter(): void
    {
        $parameters = new Parameters();

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

        $parameters->createObjectCollectionParameter($name, $namespace, $class, $alias);
    }

    public function testItCanCreateObjectParameter(): void
    {
        $parameters = new Parameters();

        $name = 'some $name value';
        $namespace = 'some $namespace value';
        $class = 'some $class value';
        $alias = 'some $alias value';

        $this->type = 'some $this->type value';

        $this->types->expects($this->once())
            ->method('createObjectType')
            ->willReturn($this->type);

        $parameters->createObjectParameter($name, $namespace, $class, $alias);
    }

    public function testItCanCreateScalarCollectionProperty(): void
    {
        $parameters = new Parameters();

        $name = 'some $name value';
        $type = 'some $type value';

        $this->scalarType = 'some $this->scalarType value';

        $this->types->expects($this->once())
            ->method('createScalarType')
            ->willReturn($this->scalarType);

        $parameters->createScalarCollectionProperty($name, $type);
    }

    public function testItCanIsScalarType(): void
    {
        $parameters = new Parameters();

        $name = 'some $name value';

        $parameters->isScalarType($name);
    }

    public function testItCanCreateScalarParameter(): void
    {
        $parameters = new Parameters();

        $name = 'some $name value';
        $type = 'some $type value';

        $this->scalarType = 'some $this->scalarType value';

        $this->types->expects($this->once())
            ->method('createScalarType')
            ->willReturn($this->scalarType);

        $parameters->createScalarParameter($name, $type);
    }
}