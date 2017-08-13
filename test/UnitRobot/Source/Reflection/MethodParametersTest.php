<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection;

use MemMemov\UnitRobot\UnitTest\UnitTest;
use PHPUnit\Framework\TestCase;

final class MethodParametersTest extends TestCase
{
    protected $parameters;

    protected function setUp(): void
    {
        $this->parameters = $this->createMock(array::class);
    }

    public function testItCanAddPropertiesToUnitTest(): void
    {
    }
}