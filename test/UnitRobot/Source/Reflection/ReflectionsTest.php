<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection;

use MemMemov\UnitRobot\UnitTest\UnitTests;
use PHPUnit\Framework\TestCase;

final class ReflectionsTest extends TestCase
{
    protected $methods;
    protected $unitTests;

    protected function setUp(): void
    {
        $this->methods = $this->createMock(Methods::class);
        $this->unitTests = $this->createMock(UnitTests::class);
    }

    public function testItCanCreateReflection(): void
    {
        $reflections = new Reflections($this->methods, $this->unitTests);
    }
}