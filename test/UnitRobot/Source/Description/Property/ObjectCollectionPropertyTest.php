<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Description\Property;

use MemMemov\UnitRobot\Source\Description\Type\Collection\ObjectArrayType;
use MemMemov\UnitRobot\UnitTest\UnitTest;
use PHPUnit\Framework\TestCase;

final class ObjectCollectionPropertyTest extends TestCase
{
    protected $name;
    protected $type;

    protected function setUp(): void
    {
        $this->name = 'some $this->name value';
        $this->type = $this->createMock(ObjectArrayType::class);
    }

    public function testItCanAddPropertyToUnitTest(): void
    {
        $objectCollectionProperty = new ObjectCollectionProperty($this->name, $this->type);

        $unitTest = $this->createMock(UnitTest::class);

        $objectCollectionProperty->addPropertyToUnitTest($unitTest);
    }
}