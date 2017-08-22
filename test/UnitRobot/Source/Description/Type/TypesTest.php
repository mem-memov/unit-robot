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
    protected $scalarTypes;

    protected function setUp(): void
    {
        $this->scalarTypes = $this->createMock(ScalarTypes::class);
    }

    public function testItCanCreateArrayType(): void
    {
        $types = new Types($this->scalarTypes);

        $types->createArrayType();
    }

    public function testItCanCreateObjectArrayType(): void
    {
        $types = new Types($this->scalarTypes);

        $itemType = $this->createMock(ObjectType::class);

        $types->createObjectArrayType($itemType);
    }

    public function testItCanCreateScalarArrayType(): void
    {
        $types = new Types($this->scalarTypes);

        $itemType = $this->createMock(ScalarType::class);

        $types->createScalarArrayType($itemType);
    }

    public function testItCanIsScalarType(): void
    {
        $types = new Types($this->scalarTypes);

        $name = 'some $name value';

        $types->isScalarType($name);
    }

    public function testItCanCreateScalarType(): void
    {
        $types = new Types($this->scalarTypes);

        $name = 'some $name value';

        $types->createScalarType($name);
    }

    public function testItCanCreateObjectType(): void
    {
        $types = new Types($this->scalarTypes);

        $namespace = 'some $namespace value';
        $class = 'some $class value';
        $alias = 'some $alias value';

        $types->createObjectType($namespace, $class, $alias);
    }

    public function testItCanCreateVoidType(): void
    {
        $types = new Types($this->scalarTypes);

        $types->createVoidType();
    }
}