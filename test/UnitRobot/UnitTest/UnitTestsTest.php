<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\UnitTest;

use MemMemov\UnitRobot\UnitTest\Builder\Declarations;
use MemMemov\UnitRobot\UnitTest\Builder\Builders;
use MemMemov\UnitRobot\UnitTest\File\File;
use MemMemov\UnitRobot\UnitTest\File\Texts;
use PHPUnit\Framework\TestCase;

final class UnitTestsTest extends TestCase
{
    public function testItCanCreateUnitTest(): void
    {
        $unitTests = new UnitTests();

        $file = $this->createMock(File::class);

        $this->builder = 'some $this->builder value';

        $this->builders->expects($this->once())
            ->method('createBuilder')
            ->willReturn($this->builder);

        $this->text = 'some $this->text value';

        $this->texts->expects($this->once())
            ->method('createText')
            ->willReturn($this->text);

        $unitTests->createUnitTest($file);
    }
}