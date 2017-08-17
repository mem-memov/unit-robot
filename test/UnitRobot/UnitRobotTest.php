<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot;

use PHPUnit\Framework\TestCase;

final class UnitRobotTest extends TestCase
{
    public function testItCanCreateTests(): void
    {
        $unitRobot = new UnitRobot();

        $this->sourceDirectory = 'some $this->sourceDirectory value';

        $this->configuration->expects($this->once())
            ->method('createSourceDirectory')
            ->willReturn($this->sourceDirectory);

        $this->unitTestDirectory = 'some $this->unitTestDirectory value';

        $this->configuration->expects($this->once())
            ->method('createUnitTestDirectory')
            ->willReturn($this->unitTestDirectory);

        $sourceDirectory->expects($this->once())
            ->method('createTests');

        $unitRobot->createTests();
    }
}