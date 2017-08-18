<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection\Method\Constructor;

use MemMemov\UnitRobot\Source\Reflection\Method\Parameter\Parameters;
use MemMemov\UnitRobot\Source\File\Text;
use MemMemov\UnitRobot\UnitTest\UnitTest;
use MemMemov\UnitRobot\Source\Description\InstanceProperties;
use PHPUnit\Framework\TestCase;

final class EmptyConstructorTest extends TestCase
{
    protected $className;
    protected $parameters;

    protected function setUp(): void
    {
        $this->className = 'some $this->className value';
        $this->parameters = $this->createMock(Parameters::class);
    }

    public function testItCanCreateTest(): void
    {
        $emptyConstructor = new EmptyConstructor($this->className, $this->parameters);

        $text = $this->createMock(Text::class);
        $unitTest = $this->createMock(UnitTest::class);

        $emptyConstructor->createTest($text, $unitTest);
    }

    public function testItCanDescribeProperties(): void
    {
        $emptyConstructor = new EmptyConstructor($this->className, $this->parameters);

        $text = $this->createMock(Text::class);
        $properties = $this->createMock(InstanceProperties::class);

        $emptyConstructor->describeProperties($text, $properties);
    }
}