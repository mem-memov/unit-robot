<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Description\Type\Scalar;

use PHPUnit\Framework\TestCase;

final class BooleanTypeTest extends TestCase
{
    public function testItCanGetForSignature(): void
    {
        $booleanType = new BooleanType();

        $booleanType->getForSignature();
    }
}