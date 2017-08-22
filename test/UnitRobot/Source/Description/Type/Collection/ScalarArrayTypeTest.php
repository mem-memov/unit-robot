<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Description\Type\Collection;

use MemMemov\UnitRobot\Source\Description\Type\Scalar\ScalarType;
use PHPUnit\Framework\TestCase;

final class ScalarArrayTypeTest extends TestCase
{
    protected $itemType;

    protected function setUp(): void
    {
        $this->itemType = $this->createMock(ScalarType::class);
    }

    public function testItCanGetForSignature(): void
    {
        $scalarArrayType = new ScalarArrayType($this->itemType);

        $scalarArrayType->getForSignature();
    }
}