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

}