<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Description\Type\Collection;

use PHPUnit\Framework\TestCase;

final class MixedArrayTypeTest extends TestCase
{
    public function testItCanGetForSignature(): void
    {
        $mixedArrayType = new MixedArrayType();

        $mixedArrayType->getForSignature();
    }
}