<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Description\Property;

use MemMemov\UnitRobot\Source\Description\Type\Scalar\ScalarType;
use MemMemov\UnitRobot\UnitTest\UnitTest;
use PHPUnit\Framework\TestCase;

final class ScalarPropertyTest extends TestCase
{
    protected $name;
    protected $type;

    protected function setUp(): void
    {
        $this->name = 'some $this->name value';
        $this->type = $this->createMock(ScalarType::class);
    }

}