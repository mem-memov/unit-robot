<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection;

use MemMemov\UnitRobot\UnitTest\UnitTest;
use PHPUnit\Framework\TestCase;

final class ParameterTest extends TestCase
{
    protected $reflection;
    protected $type;

    protected function setUp(): void
    {
        $this->reflection = $this->createMock(ReflectionParameter::class);
        $this->type = 'some type value';
    }

    public function testItCanAddPropertyToUnitTest(): void
    {
    }
}