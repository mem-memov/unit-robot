<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection\Constructor;

use PHPUnit\Framework\TestCase;

final class ClassConstructorsTest extends TestCase
{
    protected $constructors;

    protected function setUp(): void
    {
        $this->constructors = $this->createMock(Constructors::class);
    }

    public function testItCanCreateConstructor(): void
    {
        $classConstructors = new ClassConstructors($this->constructors);

        $class = $this->createMock(\ReflectionClass::class);

        $classConstructors->createConstructor($class);
    }
}