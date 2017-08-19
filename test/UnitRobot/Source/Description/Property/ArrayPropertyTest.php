<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Description\Property;

use MemMemov\UnitRobot\Source\Description\Type\Collection\MixedArrayType;
use MemMemov\UnitRobot\UnitTest\UnitTest;
use PHPUnit\Framework\TestCase;

final class ArrayPropertyTest extends TestCase
{
    protected $name;
    protected $type;

    protected function setUp(): void
    {
        $this->name = 'some $this->name value';
        $this->type = $this->createMock(MixedArrayType::class);
    }

}