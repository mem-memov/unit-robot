<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Description\Type;

use MemMemov\UnitRobot\Source\Description\Type\Collection\MixedArrayType;
use MemMemov\UnitRobot\Source\Description\Type\Collection\ObjectArrayType;
use MemMemov\UnitRobot\Source\Description\Type\Collection\ScalarArrayType;
use MemMemov\UnitRobot\Source\Description\Type\Scalar\ScalarType;
use MemMemov\UnitRobot\Source\Description\Type\Scalar\ScalarTypes;
use PHPUnit\Framework\TestCase;

final class TypesTest extends TestCase
{
    public function testItCanCreateArrayType(): void
    {
        $types = new Types();

        $types->createArrayType();
    }

    public function testItCanCreateObjectArrayType(): void
    {
        $types = new Types();

        $itemType = $this->createMock(ObjectType::class);

        $types->createObjectArrayType($itemType);
    }

    public function testItCanCreateScalarArrayType(): void
    {
        $types = new Types();

        $itemType = $this->createMock(ScalarType::class);

        $types->createScalarArrayType($itemType);
    }

    public function testItCanCreateScalarType(): void
    {
        $types = new Types();

        $name = 'some $name value';

        $types->createScalarType($name);
    }

    public function testItCanCreateObjectType(): void
    {
        $types = new Types();

        $namespace = 'some $namespace value';
        $class = 'some $class value';
        $alias = 'some $alias value';

        $types->createObjectType($namespace, $class, $alias);
    }
}