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

        $this->class->expects($this->once())
            ->method('isAbstract');

        $this->class->expects($this->once())
            ->method('isInterface');

        $this->unitTests->expects($this->once())
            ->method('createUnitTest')
            ->willReturn($this->unitTest);

        $unitTest->expects($this->once())
            ->method('setNamespace');

        $this->class->expects($this->once())
            ->method('getNamespaceName');

        $unitTest->expects($this->once())
            ->method('setClassName');

        $this->class->expects($this->once())
            ->method('getShortName');

        $this->dependencies->expects($this->once())
            ->method('addDependenciesToUnitTest');

        $this->class->expects($this->once())
            ->method('getMethods')
            ->willReturn($this->methodReflections);

        $this->methods->expects($this->once())
            ->method('createMethod')
            ->willReturn($this->method);

        $this->class->expects($this->once())
            ->method('getShortName');

        $method->expects($this->once())
            ->method('createTest');

        $unitTest->expects($this->once())
            ->method('write');

        $reflection->createTests($sourceText, $unitTestFile);
    }
}