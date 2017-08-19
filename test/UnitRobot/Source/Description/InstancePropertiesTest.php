<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Description;

use MemMemov\UnitRobot\Source\Description\Property\Property;
use PHPUnit\Framework\TestCase;

final class InstancePropertiesTest extends TestCase
{
    public function testItCanAddProperty(): void
    {
        $instanceProperties = new InstanceProperties();

        $property = $this->createMock(Property::class);

        $instanceProperties->addProperty($property);
    }
}