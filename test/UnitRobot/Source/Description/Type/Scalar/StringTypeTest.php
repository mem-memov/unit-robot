<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Description\Type\Scalar;

use PHPUnit\Framework\TestCase;

final class StringTypeTest extends TestCase
{
    public function testItCanGetForSignature(): void
    {
        $stringType = new StringType();

        $stringType->getForSignature();
    }
}