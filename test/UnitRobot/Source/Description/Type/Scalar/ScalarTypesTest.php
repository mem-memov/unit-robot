<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Description\Type\Scalar;

use PHPUnit\Framework\TestCase;

final class ScalarTypesTest extends TestCase
{
    public function testItCanCreateBooleanType(): void
    {
        $scalarTypes = new ScalarTypes();

        $scalarTypes->createBooleanType();
    }

    public function testItCanCreateFloatType(): void
    {
        $scalarTypes = new ScalarTypes();

        $scalarTypes->createFloatType();
    }

    public function testItCanCreateIntegerType(): void
    {
        $scalarTypes = new ScalarTypes();

        $scalarTypes->createIntegerType();
    }

    public function testItCanCreateStringType(): void
    {
        $scalarTypes = new ScalarTypes();

        $scalarTypes->createStringType();
    }
}