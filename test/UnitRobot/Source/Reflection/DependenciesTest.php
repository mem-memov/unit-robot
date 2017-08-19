<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection;

use MemMemov\UnitRobot\Source\File\Text;
use MemMemov\UnitRobot\UnitTest\UnitTest;
use MemMemov\UnitRobot\Source\Description\Instance\InstanceDependencies;
use MemMemov\UnitRobot\Source\Description\Dependencies as DescriptionDependencies;
use PHPUnit\Framework\TestCase;

final class DependenciesTest extends TestCase
{
    public function testItCanAddDependenciesToUnitTest(): void
    {
        $dependencies = new Dependencies();

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
        $dependencies = new Dependencies();

        $sourceText = $this->createMock(Text::class);
        $instanceDependencies = $this->createMock(InstanceDependencies::class);

        $prelude = 'some $prelude value';

        $sourceText->expects($this->once())
            ->method('extract')
            ->willReturn($prelude);

        $this->class->expects($this->once())
            ->method('getStartLine');

        $this->instanceDependency = 'some $this->instanceDependency value';

        $this->descriptionDependencies->expects($this->once())
            ->method('createDependency')
            ->willReturn($this->instanceDependency);

        $instanceDependencies->expects($this->once())
            ->method('addDependency');

        $dependencies->describe($sourceText, $instanceDependencies);
    }
}