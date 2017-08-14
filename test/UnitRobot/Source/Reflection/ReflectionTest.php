<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection;

use MemMemov\UnitRobot\Source\Reflection\Method\Methods;
use MemMemov\UnitRobot\Source\File\Text;
use MemMemov\UnitRobot\UnitTest\File\File as UnitTestFile;
use MemMemov\UnitRobot\UnitTest\UnitTests;
use PHPUnit\Framework\TestCase;

final class ReflectionTest extends TestCase
{
    protected $class;
    protected $dependencies;
    protected $methods;
    protected $unitTests;

    protected function setUp(): void
    {
        $this->class = $this->createMock(\ReflectionClass::class);
        $this->dependencies = $this->createMock(Dependencies::class);
        $this->methods = $this->createMock(Methods::class);
        $this->unitTests = $this->createMock(UnitTests::class);
    }

    public function testItCanCreateTests(): void
    {
        $reflection = new Reflection($this->class, $this->dependencies, $this->methods, $this->unitTests);

        $sourceText = $this->createMock(Text::class);
        $unitTestFile = $this->createMock(UnitTestFile::class);

        $reflection->createTests($sourceText, $unitTestFile);
    }
}