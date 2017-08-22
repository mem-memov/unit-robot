<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Description\Type;

use PHPUnit\Framework\TestCase;

final class VoidTypeTest extends TestCase
{
    public function testItCanGetForSignature(): void
    {
        $voidType = new VoidType();

        $voidType->getForSignature();
    }
}