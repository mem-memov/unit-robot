<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection;

use MemMemov\UnitRobot\Source\File\Text;
use MemMemov\UnitRobot\UnitTest\UnitTest;
use PHPUnit\Framework\TestCase;

final class DependenciesTest extends TestCase
{
    protected $class;

    protected function setUp(): void
    {
        $this->class = $this->createMock(\ReflectionClass::class);
    }

    public function testItCanAddDependenciesToUnitTest(): void
    {
        $dependencies = new Dependencies();
    }
}