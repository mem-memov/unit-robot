<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection;

use MemMemov\UnitRobot\Source\File\Text;
use MemMemov\UnitRobot\UnitTest\UnitTest;
use MemMemov\UnitRobot\Source\Description\InstanceDependencies;
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
        $dependencies = new Dependencies($this->class);

        $sourceText = $this->createMock(Text::class);
        $unitTest = $this->createMock(UnitTest::class);

        $prelude = 'some $prelude value';

        $sourceText->expects($this->once())
            ->method('extract')
            ->willReturn($prelude);

        $this->class->expects($this->once())
            ->method('getStartLine');

        $unitTest->expects($this->once())
            ->method('addDependency');

        $dependencies->addDependenciesToUnitTest($sourceText, $unitTest);
    }

    public function testItCanDescribe(): void
    {
        $dependencies = new Dependencies($this->class);

        $sourceText = $this->createMock(Text::class);
        $dependencies = $this->createMock(InstanceDependencies::class);

        $prelude = 'some $prelude value';

        $sourceText->expects($this->once())
            ->method('extract')
            ->willReturn($prelude);

        $this->class->expects($this->once())
            ->method('getStartLine');

        $dependencies->describe($sourceText, $dependencies);
    }
}