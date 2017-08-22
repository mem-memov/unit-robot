<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Description\Type\Scalar;

use PHPUnit\Framework\TestCase;

final class ScalarTypesTest extends TestCase
{
    public function testItCanIsScalarType(): void
    {
        $scalarTypes = new ScalarTypes();

        $name = 'some $name value';

        $scalarTypes->isScalarType($name);
    }

    public function testItCanCreateScalarType(): void
    {
        $scalarTypes = new ScalarTypes();

        $name = 'some $name value';

        $scalarTypes->createScalarType($name);
    }
}