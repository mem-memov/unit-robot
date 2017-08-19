<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Description\Type\Collection;

use MemMemov\UnitRobot\Source\Description\Type\ObjectType;
use PHPUnit\Framework\TestCase;

final class ObjectArrayTypeTest extends TestCase
{
    protected $itemType;

    protected function setUp(): void
    {
        $this->itemType = $this->createMock(ObjectType::class);
    }

}