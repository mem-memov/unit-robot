<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Description\Instance;

use MemMemov\UnitRobot\Source\Description\Property\Property;
use MemMemov\UnitRobot\UnitTest\UnitTest;
use PHPUnit\Framework\TestCase;

final class InstancePropertiesTest extends TestCase
{
    public function testItCanAddProperty(): void
    {
        $instanceProperties = new InstanceProperties();

        $property = $this->createMock(Property::class);

        $instanceProperties->addProperty($property);
    }

    public function testItCanCreateUnitTests(): void
    {
        $instanceProperties = new InstanceProperties();

        $unitTest = $this->createMock(UnitTest::class);

        $instanceProperties->createUnitTests($unitTest);
    }
}