<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Description\Type;

use MemMemov\UnitRobot\Source\Description\Type\Collection\MixedArrayType;
use MemMemov\UnitRobot\Source\Description\Type\Collection\ObjectArrayType;
use MemMemov\UnitRobot\Source\Description\Type\Collection\ScalarArrayType;
use MemMemov\UnitRobot\Source\Description\Type\Scalar\BooleanType;
use MemMemov\UnitRobot\Source\Description\Type\Scalar\FloatType;
use MemMemov\UnitRobot\Source\Description\Type\Scalar\IntegerType;
use MemMemov\UnitRobot\Source\Description\Type\Scalar\StringType;
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

    public function testItCanCreateBooleanType(): void
    {
        $types = new Types();

        $types->createBooleanType();
    }

    public function testItCanCreateFloatType(): void
    {
        $types = new Types();

        $types->createFloatType();
    }

    public function testItCanCreateStringType(): void
    {
        $types = new Types();

        $types->createStringType();
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