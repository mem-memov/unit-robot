<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Description\Property;

use MemMemov\UnitRobot\Source\Description\Type\Collection\ScalarArrayType;
use MemMemov\UnitRobot\UnitTest\UnitTest;
use PHPUnit\Framework\TestCase;

final class ScalarCollectionPropertyTest extends TestCase
{
    protected $name;
    protected $type;

    protected function setUp(): void
    {
        $this->name = 'some $this->name value';
        $this->type = $this->createMock(ScalarArrayType::class);
    }

    public function testItCanAddPropertyToUnitTest(): void
    {
        $scalarCollectionProperty = new ScalarCollectionProperty($this->name, $this->type);

        $unitTest = $this->createMock(UnitTest::class);

        $scalarCollectionProperty->addPropertyToUnitTest($unitTest);
    }
}