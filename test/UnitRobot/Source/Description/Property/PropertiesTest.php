<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Description\Property;

use MemMemov\UnitRobot\Source\Description\Type\Types;
use PHPUnit\Framework\TestCase;

final class PropertiesTest extends TestCase
{
    protected $types;

    protected function setUp(): void
    {
        $this->types = $this->createMock(Types::class);
    }

}