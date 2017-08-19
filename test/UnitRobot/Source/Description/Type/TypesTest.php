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

}