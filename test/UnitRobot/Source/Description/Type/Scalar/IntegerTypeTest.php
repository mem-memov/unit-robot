<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Description\Type\Scalar;

use PHPUnit\Framework\TestCase;

final class IntegerTypeTest extends TestCase
{
    public function testItCanGetForSignature(): void
    {
        $integerType = new IntegerType();

        $integerType->getForSignature();
    }
}