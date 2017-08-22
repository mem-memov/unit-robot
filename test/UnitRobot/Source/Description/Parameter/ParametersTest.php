<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Description\Parameter;

use MemMemov\UnitRobot\Source\Description\Type\Types;
use PHPUnit\Framework\TestCase;

final class ParametersTest extends TestCase
{
    protected $types;

    protected function setUp(): void
    {
        $this->types = $this->createMock(Types::class);
    }

    public function testItCanCreateArrayParameter(): void
    {
        $parameters = new Parameters($this->types);

        $name = 'some $name value';

        $parameters->createArrayParameter($name);
    }

    public function testItCanCreateObjectCollectionParameter(): void
    {
        $parameters = new Parameters($this->types);

        $name = 'some $name value';
        $namespace = 'some $namespace value';
        $class = 'some $class value';
        $alias = 'some $alias value';

        $parameters->createObjectCollectionParameter($name, $namespace, $class, $alias);
    }

    public function testItCanCreateObjectParameter(): void
    {
        $parameters = new Parameters($this->types);

        $name = 'some $name value';
        $namespace = 'some $namespace value';
        $class = 'some $class value';
        $alias = 'some $alias value';

        $parameters->createObjectParameter($name, $namespace, $class, $alias);
    }

    public function testItCanIsScalarType(): void
    {
        $parameters = new Parameters($this->types);

        $name = 'some $name value';

        $parameters->isScalarType($name);
    }

    public function testItCanCreateScalarParameter(): void
    {
        $parameters = new Parameters($this->types);

        $name = 'some $name value';
        $type = 'some $type value';

        $parameters->createScalarParameter($name, $type);
    }
}