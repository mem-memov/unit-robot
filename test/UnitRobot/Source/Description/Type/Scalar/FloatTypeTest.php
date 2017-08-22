<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Description\Type\Scalar;

use PHPUnit\Framework\TestCase;

final class FloatTypeTest extends TestCase
{
    public function testItCanGetForSignature(): void
    {
        $floatType = new FloatType();

        $floatType->getForSignature();
    }
}