<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection\Constructor;

use MemMemov\UnitRobot\Source\File\Text;
use MemMemov\UnitRobot\Source\Description\Instance\InstanceProperties;
use MemMemov\UnitRobot\Source\Description\Instance\InstanceDependencies;
use MemMemov\UnitRobot\Source\Description\Instance\Instancies;
use PHPUnit\Framework\TestCase;

final class EmptyConstructorTest extends TestCase
{
    protected $instances;

    protected function setUp(): void
    {
        $this->instances = $this->createMock(Instancies::class);
    }

    public function testItCanDescribeProperties(): void
    {
        $emptyConstructor = new EmptyConstructor($this->instances);

        $text = $this->createMock(Text::class);
        $dependencies = $this->createMock(InstanceDependencies::class);

        $emptyConstructor->describeProperties($text, $dependencies);
    }
}