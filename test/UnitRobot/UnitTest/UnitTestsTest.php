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
    protected $declarations;
    protected $builders;
    protected $texts;

    protected function setUp(): void
    {
        $this->declarations = $this->createMock(Declarations::class);
        $this->builders = $this->createMock(Builders::class);
        $this->texts = $this->createMock(Texts::class);
    }

    public function testItCanCreateUnitTest(): void
    {
        $unitTests = new UnitTests($this->declarations, $this->builders, $this->texts);

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